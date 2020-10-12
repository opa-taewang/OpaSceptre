<template>
    <div class="container">
        <div class="btn-icon-group">
            <button class="btn-icon btn-add-cart" v-bind:class="btnStyles" @click="productStatus" type="button"><i class="fas fa-shopping-bag"></i></button>
        </div>
    </div>
</template>
// data-toggle="modal" data-target="#addCartModal"
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
            productStatus() {
                axios.post('/cart/'+ this.productId)
                    .then(response => {
                        response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                    })

                    // .catch(errors =>{
                    //     if(errors.response.status == 401){
                    //         toastr.warning('You need to log in to save this product');
                    //         window.location = '/login';
                    //     }
                    // });
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
