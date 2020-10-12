<template>
    <div class="container">
        <div class="input-group">
        <select v-model="product_quantity" class="custom-select" id="quantities" v-on:change="updateQuantity" :required="true">
            <!-- <option value="" :selected="false">Choose option</option> -->
            <option v-for="quantity in quantities" :value="quantity" v-text="quantity" v-bind:key="quantity" :selected="quantity == '1'"></option>
        </select>
        </div>
    </div>
</template>
<script>

    export default {
        props: ['productId', 'status', 'currentValue'],

        mounted() {
            console.log(this.currentValue)
        },

        data() {
            return {
                statusChange: this.status,
                quantities: [],
                product_quantity: ''
            }
        },
        components:{},
        created(){
            this.quantitiesGet();
        },


        methods: {
            quantitiesGet(){
                 axios.get('/product-colour-size/'+this.productId).then(response => {
                    for (var i = 1; i < response.data.quantity; i++) {
                        this.quantities.push(i);
                    }
                });
            },
            updateQuantity() {
                axios.post('/cart/update/'+ this.productId, {
                        product_quantity: this.product_quantity,
                })
                .then(function (response) {
                        // console.log(response.data)
                        response.data.type == 'success' ? toastr.success(response.data.message) : toastr.warning(response.data.message);
                        location.reload();
                })
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
