<template>
    <div class="container">
        <div title="Edit" class="step-title-edit" @click="addressDefault">
            <h5>Make Default</h5>
        </div>
        <!-- <button class="btn btn-sm btn-block px-4" type="button" v-text="buttonText"></button> -->
    </div>
</template>

<script>
    export default {
        props: ['addressId', 'addressStatus'],

        mounted() {
            // console.log(this.addressStatus)
        },

        data: function name(params) {
            return {
                statusChange: this.addressStatus,
            }
        },

        methods: {
            addressDefault() {
                axios.post('/makeDefaultAddress/'+ this.addressId)
                    .then(response => {
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
                    'text-secondary' : (this.statusChange != 1 ? true : false)
                }
            },
        }
    }
</script>
