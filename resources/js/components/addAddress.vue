<template>
    <div class="container">
       <form v-on:submit.prevent="addToCart" method="post">
                <div class="modal-body">
                    <h2 class="step-title">Shipping Address
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h2>

                    <div class="form-group required-field">
                        <label>First Name </label>
                        <input type="text" class="form-control" v-model="first_name" name="first_name" required>
                        <span class="text-danger" role="alert">{{errors.get('first_name')}}</span>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Last Name </label>
                        <input type="text" class="form-control" v-model="last_name" name="last_name" required>
                        <span class="text-danger" role="alert">{{errors.get('last_name')}}</span>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Street Address </label>
                        <input type="text" class="form-control" v-model="street_address" name="street_address" required>
                        <span class="text-danger" role="alert">{{errors.get('street_address')}}</span>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>Additional Address Info </label>
                        <input type="text" class="form-control" v-model="additional_street_address" name="additional_street_address" required>
                        <span class="text-danger" role="alert">{{errors.get('additional_street_address')}}</span>
                    </div><!-- End .form-group -->

                    <div v-bind:class="{'form-group': true, 'has-error':'errors.state'}">
                        <label for="product_brand">State</label>
                        <div class="select-custom">
                            <select v-model="state" class="form-control" id="state" name="state">
                                <option v-for="size in sizes" :value="size" v-text="size" v-bind:key="size"></option>
                            </select>
                            <span class="text-danger" role="alert">{{errors.get('state')}}</span>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div v-bind:class="{'form-group': true, 'has-error':'errors.lga'}" class="">
                        <label for="product_brand">LGA</label>
                        <div class="select-custom">
                            <select v-model="lga" class="form-control" id="lga" name="lga">
                                <option v-for="colour in colours" :value="colour" v-text="colour" v-bind:key="colour" v-on:change="clearError()"></option>
                            </select>
                            <span class="text-danger" role="alert">{{errors.get('lga')}}</span>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Phone Number </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="phone_number">+234</span>
                            </div>
                            <input type="tel" class="form-control" placeholder="xxx xxx xxxx" v-model="phone_number" name="phone_number" required>
                            <span class="text-danger" role="alert">{{errors.get('phone_number')}}</span>
                        </div>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Additional Phone Number </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="additional_phone_number">+234</span>
                            </div>
                            <input type="tel" class="form-control" placeholder="xxx xxx xxxx" v-model="additional_phone_number" name="additional_phone_number" required>
                            <span class="text-danger" role="alert">{{errors.get('additional_phone_number')}}</span>
                        </div>
                    </div><!-- End .form-group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>

                </div>
            </form>
    </div>
</template>
<script>

class Errors{
    constructor(){
        this.errors = {}
    }

    get(field){
        if(this.errors[field]){
            return this.errors[field][0];
        }
    }

    record(errors){
        this.errors = errors.errors;;
    }
}

    export default {
        props: [],

        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                statusChange: this.status,
                states: [],
                lgas: [],
                errors: new Errors(),
                first_name: '',
                last_name: '',
                street_address:'',
                additional_street_address:'',
                state:'',
                lga:'',
                phone_number:'',
                additional_phone_number:''
            }
        },
        components:{},
        created(){
            this.fetchStates();
            this.fetchLGAreas();
        },


        methods: {
            clearError(){
                console.log('ksksk')
            },
            fetchStates(){
                axios.get('/states').then(response => {
                    this.colours = response.data.colours
                });
            },
            fetchLGAreas(){
                axios.get('/lgas/'+this.state).then(response => {
                    this.sizes = response.data.sizes
                });
            },
            addToCart() {
                axios.post('/cart/check/'+ this.productId, {
                        first_name: this.first_name,
                        last_name: this.last_name,
                        street_address: this.street_address,
                        additional_street_address: this.additional_street_address,
                        state: this.state,
                        lga: this.lga,
                        phone_number: this.phone_number,
                        additional_phone_number: this.additional_phone_number
                })
                .then(function (response) {
                        response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                }).catch(error => {
                        this.errors.record(error.response.data)
                    }
                    );
            }
        },

        computed: {
            btnStyles(){
                return {
                    'btn-success' : (this.statusChange == 1 ? true : false),
                    'btn-danger' : (this.statusChange != 1 ? true : false)
                }
            },
        }
    }
</script>
