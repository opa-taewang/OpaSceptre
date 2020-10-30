<template>
    <div class="container">
        <a href="#addAddress">
            <span class="sr-only">Make Defaualt</span><i class="fas fa-star "></i>
        </a>
        <div title="Edit" class="step-title-edit"  v-bind:class="textStyles" @click="addressStatus">
            <span class="sr-only">Make Defaualt</span><i class="fas fa-star "></i>
        </div>
        <!-- <button class="btn btn-sm btn-block px-4" type="button" v-text="buttonText"></button> -->
    </div>
</template>

<script>
    export default {
        props: ['addressId', 'addressStatus'],

        mounted() {
            console.log(this.addressStatus)
        },

        data: function name(params) {
            return {
                // statusChange: this.addressStatus,
            }
        },

        methods: {
            addressStatus() {
                axios.post('/makeDefaultAddress/'+ this.addressId)
                    .then(response => {
                        // window.location = '/shipping-address';
                            // response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                            location.reload();
                    })

                    // .catch(errors =>{
                    //     if(errors.response.status == 401){
                    //         window.location = '/login';
                    //     }
                    // });
            }
        },

        computed: {
            textStyles(){
                return {
                    'text-success' : (this.statusChange == 1 ? true : false),
                    'text-danger' : (this.statusChange != 1 ? true : false)
                }
            },
        }
    }
</script>
