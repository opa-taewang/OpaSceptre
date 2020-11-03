<template :key="componentKey" @click="reRender">
    <div :key="componentKey" class="container">
            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                <i class="fas fa-shopping-bag"></i>
                <span class="cart-count badge-circle">{{total.cart_quantity}}</span>
            </a>
            <div class="dropdown-menu">
                <div class="dropdownmenu-wrapper">
                    <div class="dropdown-cart-header">
                        <span>{{this.total.cart_quantity}} Items</span>

                        <a href="cart.html" class="float-right">View Cart</a>
                    </div><!-- End .dropdown-cart-header -->

                        <div class="dropdown-cart-products">
                        <div class="product" v-for="cart in carts" v-bind:key="cart.id">
                        <div class="product-details">
                            <h4 class="product-title">
                                <a href="product.html">{{cart.product_name}}</a>
                            </h4>

                            <span class="cart-product-info">
                                <span class="cart-product-qty">{{cart.product_quantity}}</span>
                                x {{cart.product_price/cart.product_quantity}}
                            </span>
                        </div><!-- End .product-details -->

                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img :src="'https://res.cloudinary.com/opasceptre/image/upload/'+cart.product_image" alt="product" width="80" height="80" />
                            </a>
                            <a href="#" id="cartremove" class="btn-remove icon-cancel" title="Remove Product"  @click="removeCartItem(cart.product_id)"></a>
                        </figure>
                        </div><!-- End .product -->
                    </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                        <span>Subtotal:</span>

                        <span class="cart-total-price float-right">{{total.total_price}}</span>
                    </div><!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action">
                        <a href="/checkout" class="btn btn-primary btn-block">Checkout</a>
                    </div><!-- End .dropdown-cart-total -->
                </div><!-- End .dropdownmenu-wrapper -->
            </div><!-- End .dropdown-menu -->
        </div>
</template>
<script>
    // import headerCart from './headerCart'
    export default {
        props: [],

        mounted() {
            // console.log('Header Cart mounted.')
        },

        data() {
            return {
                carts: [],
                total: [],
                componentKey: 0,
            }
        },
        created(){
            this.fetchCart();
        },


        methods: {
            fetchCart(){
                axios.get('/cart/header').then(response => {
                    this.carts = response.data.carts
                    this.total = response.data.total
                });
            },
            removeCartItem(cartId){
                axios.post('/cart/'+cartId+'/remove').then(response => {
                    response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                    this.$root.$refs.A.reRender();
                    // this.$emit('my-custom-event')
                });
            },
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
