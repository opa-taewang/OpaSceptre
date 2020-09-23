<template>
    <div class="container">
        <div class="btn-icon-group">
            <button class="btn-icon btn-add-cart" v-bind:class="btnStyles" @click="productStatus" type="button" data-toggle="modal" data-target="#addCartModal"><i class="fas fa-shopping-bag"></i></button>
        </div>
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
            productStatus() {
                axios.post('/admin/product/'+ this.productId)
                    .then(response => {
                        this.statusChange = response.data.status;

                        console.log(response.data.status);

                        // if(response){
                        //     location.reload();
                        // }
                    })

                    // .catch(errors =>{
                    //     if(errors.response.status == 401){
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
