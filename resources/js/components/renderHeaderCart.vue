<template :key="componentKey" @click="reRender">
    <div class="container">
            <!-- <component v-bind:is="component"></component> -->
            <header-cart :key="componentKey" @my-custom-event="reRender"></header-cart>
        </div>
</template>
<script>
    import headerCart from './headerCart'
    export default {
        props: [],

        components:{
            'header-cart': headerCart
        },
        created() {
            this.$root.$refs.A = this;
        },
        mounted() {

        },

        data() {
            return {
                componentKey: 0,
            }
        },
        methods: {
            reRender(){
                this.componentKey++;
                console.log(this.componentKey);
            },
            removeCartItem(cartId){
                axios.post('/cart/'+cartId+'/remove').then(response => {
                    response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                });
            },
        },
    }
</script>
