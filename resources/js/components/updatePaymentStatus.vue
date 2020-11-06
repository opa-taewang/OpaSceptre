<template>
    <div class="container">
        <div class="container">
            <button class="btn btn-block px-4" title="Click to change status" v-bind:class="btnStyles" @click="paymentMethodStatus" type="button" v-text="buttonText"></button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['paymentId','paymentName','paymentStatus'],

        mounted() {
            // console.log(this.addressStatus)
        },

        data: function name(params) {
            return {
                // statusChange: this.paymentStatus,
            }
        },

        methods: {
            paymentMethodStatus() {
                axios.post('/admin/payment-method/'+this.paymentId+'/status')
                    .then(response => {
                            window.location='/admin/payment-method';
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
                    'btn-success' : (this.paymentStatus == 1 ? true : false),
                    'btn-secondary' : (this.paymentStatus != 1 ? true : false)
                }
            },

            buttonText(){
                return this.paymentStatus == 1 ? 'Active' : 'Inactive'
            },
        }
    }
</script>
