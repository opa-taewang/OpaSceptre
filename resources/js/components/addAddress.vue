<template>
    <div class="container">
       <form v-on:submit.prevent="addToCart" method="post">
                <div class="modal-body">
                    <h2 class="step-title">Shipping Address
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h2>

                    <div class="row">
                        <div class="col-md-6 form-group required-field">
                            <label>First Name </label>
                            <input type="text" class="form-control" v-model="first_name" name="first_name">
                            <span class="text-danger" role="alert">{{errors.get('first_name')}}</span>
                        </div><!-- End .form-group -->

                        <div class="col-md-6 form-group required-field">
                            <label>Last Name </label>
                            <input type="text" class="form-control" v-model="last_name" name="last_name">
                            <span class="text-danger" role="alert">{{errors.get('last_name')}}</span>
                        </div><!-- End .form-group -->
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group required-field">
                            <label>Street Address </label>
                            <input type="text" class="form-control" v-model="street_address" name="street_address">
                            <span class="text-danger" role="alert">{{errors.get('street_address')}}</span>
                        </div><!-- End .form-group -->

                        <div class="col-md-6 form-group">
                            <label>Additional Address Info </label>
                            <input type="text" class="form-control" v-model="additional_street_address" name="additional_street_address">
                            <span class="text-danger" role="alert">{{errors.get('additional_street_address')}}</span>
                        </div><!-- End .form-group -->
                    </div>

                    <div class="row">
                        <div v-bind:class="{'form-group': true, 'has-error':'errors.state'}" class="col-md-6">
                            <label for="product_brand">State</label>
                            <div class="select-custom">
                                <select v-model="state" class="form-control" id="state" name="state" @change="fetchLGAreas()">
                                    <option>Choose state</option>
                                    <option v-for="state in states" :value="state.id" v-text="state.state_name" v-bind:key="state.id"></option>
                                </select>
                                <span class="text-danger" role="alert">{{errors.get('state')}}</span>
                            </div><!-- End .select-custom -->
                        </div><!-- End .form-group -->

                        <div v-bind:class="{'form-group': true, 'has-error':'errors.lga'}" class="col-md-6">
                            <label for="product_brand">LGA</label>
                            <div class="select-custom">
                                <select v-model="lga" class="form-control" id="lga" name="lga">
                                    <option>Choose local government area</option>
                                    <option v-for="lga in lgas" :value="lga.id" v-text="lga.lgarea_name" v-bind:key="lga.id" v-on:change="clearError()"></option>
                                </select>
                                <span class="text-danger" role="alert">{{errors.get('lga')}}</span>
                            </div><!-- End .select-custom -->
                        </div><!-- End .form-group -->
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group required-field">
                            <label>Phone Number </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="phone_number">+234</span>
                                </div>
                                <input type="tel" class="form-control" placeholder="xxx xxx xxxx" v-model="phone_number" name="phone_number">
                            </div>
                            <span class="text-danger" role="alert">{{errors.get('phone_number')}}</span>
                        </div><!-- End .form-group -->

                        <div class="col-md-6 form-group required-field">
                            <label>Additional Phone Number </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="additional_phone_number">+234</span>
                                </div>
                                <input type="tel" class="form-control" placeholder="xxx xxx xxxx" v-model="additional_phone_number" name="additional_phone_number">
                            </div>
                            <span class="text-danger" role="alert">{{errors.get('additional_phone_number')}}</span>
                        </div><!-- End .form-group -->
                    </div>
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
        this.errors = errors.errors;
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
                state:'Choose state',
                lga:'Choose local government area',
                phone_number:'',
                additional_phone_number:''
            }
        },
        components:{},
        created(){
            this.fetchStates();
            // this.fetchLGAreas();
        },


        methods: {
            clearError(){
                console.log('ksksk')
            },
            fetchStates(){
                axios.get('/states').then(response => {
                    this.states = response.data
                });
            },
            fetchLGAreas(){
                axios.get('/lgareas/'+this.state).then(response => {
                    this.lgas = response.data
                });
            },
            addToCart() {
                axios.post('/add-shipping-address', {
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
                        window.location = '/shipping-address';
                }).catch(error => {
                        this.errors.record(error.response.data)
                    }
                    );
            }
        },

        computed: {
            btnStyles(){
                // return {
                //     'btn-success' : (this.statusChange == 1 ? true : false),
                //     'btn-danger' : (this.statusChange != 1 ? true : false)
                // }
            },
        }
    }
</script>
