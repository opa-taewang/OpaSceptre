<template>
    <div class="container">
        <form v-on:submit.prevent="addToCart" method="post">
        <!-- <form> -->
            <div class="row">
                <div v-bind:class="{'form-group': true,'col-md-4':true, 'has-error':'errors.colour'}">
                    <label for="product_brand">Colour</label>
                    <select v-model="product_colour" class="form-control select2" id="product_colour" name="product_colour" style="width: 100%;">
                        <option v-for="colour in colours" :value="colour" v-text="colour" v-bind:key="colour" v-on:change="clearError()"></option>
                    </select>
                    <span class="text-danger" role="alert">{{errors.get('product_colour')}}</span>
                </div>

                <div v-bind:class="{'form-group': true,'col-md-4':true, 'has-error':'errors.colour'}" class="">
                    <label for="product_brand">Size</label>
                    <select v-model="product_size" class="form-control select2" id="product_size" name="product_size" style="width: 100%;">
                        <option v-for="size in sizes" :value="size" v-text="size" v-bind:key="size"></option>
                    </select>
                    <span class="text-danger" role="alert">{{errors.get('product_size')}}</span>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="product_brand">Quantity</label>
                    <input class="form-control cartquantity" type="number" min="1" step="1" max="100" value="1" v-model="product_quantity" name="product_quantity">
                    <span class="text-danger" role="alert">{{errors.get('product_quantity')}}</span>
                </div>
            </div>

            <hr class="divider">

            <div class="col-md-12 product-action row">
                <div class="col-md-4 mb-3">
                    <button class="btn btn-dark add-cart icon-shopping-cart"  title="Add to cart" v-bind:class="btnStyles" type="submit">Add to Cart</button>
                </div>
            </div><!-- End .product-action -->
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
        props: ['productId', 'status', 'colour', 'size'],

        mounted() {
            // console.log('Component mounted.')
        },

        data() {
            return {
                statusChange: this.status,
                colours: [],
                sizes: [],
                errors: new Errors(),
                product_colour: '',
                product_size: '',
                product_quantity: 1
            }
        },
        components:{},
        created(){
            this.fetchColour();
            this.fetchSize();
        },


        methods: {
            clearError(){
                console.log('ksksk')
            },
            fetchColour(){
                axios.get('/product-colour-size/'+this.productId).then(response => {
                    this.colours = response.data.colours
                    this.product_colour = response.data.colours[0];
                });
            },
            fetchSize(){
                axios.get('/product-colour-size/'+this.productId).then(response => {
                    this.sizes = response.data.sizes
                    this.product_size = response.data.sizes[0]
                });
            },
            addToCart() {
                axios.post('/cart/check/'+ this.productId, {
                        product_colour: this.product_colour,
                        product_size: this.product_size,
                        product_quantity: this.product_quantity,
                })
                .then(function (response) {
                        response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                        // this.$root.$refs.A.reRender();
                        // this.$root.$refs.A.reRender();
                        // console.log('jdjdjdj');
                }).catch(error => {
                        this.errors.record(error.response.data)
                    }
                    );
                this.$root.$refs.A.reRender();
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
