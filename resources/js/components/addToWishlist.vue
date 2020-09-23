<template>
    <div class="container">
        <a class="btn-icon-wish" @click="addToWishlist" type="button"><i class="far fa-heart" v-bind:class="btnStyles"></i></a>
    </div>
</template>

<script>
    export default {
        props: ['productId', 'status'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function name(params) {
            return {
                statusChange: this.status,
            }
        },

        methods: {
            addToWishlist() {
                axios.post('/wishlist/'+ this.productId)
                    .then(response => {
                        this.statusChange = response.data.status;
                        toastr.success(response.data.message);

                    })

                    .catch(errors =>{
                        if(errors.response.status == 401){
                            toastr.warning('You need to log in to save this product');
                            window.location = '/login';
                        }
                    });
            }
        },

        computed: {
            btnStyles(){
                return {
                    'text-success' : (this.statusChange == 1 ? true : false),
                    'text-danger' : (this.statusChange != 1 ? true : false)
                }
            },
        }
    }
</script>
