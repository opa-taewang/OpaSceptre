<template>
    <div class="container">
        <button class="btn btn-sm btn-block px-4" v-bind:class="btnStyles" @click="productStatus" type="button" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['productId', 'status'],

        mounted() {
            // console.log('Component mounted.')
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
            buttonText(){
                return this.statusChange == 1 ? 'Active' : 'Inactive'
            },

            btnStyles(){
                return {
                    'btn-success' : (this.statusChange == 1 ? true : false),
                    'btn-danger' : (this.statusChange != 1 ? true : false)
                }
            },
        }
    }
</script>
