<template>
    <div class="main">
        <p>Main List</p>
    </div>
</template>
<style>


</style>
<script>
    import axios from 'axios';


    export default {
        data() {
            return {
                products : [],
                topSalesProducts : [],
                topRatedProducts : [],
                pageNumber: 0 ,
                pageRatedNumber: 0 ,
                pageSalesNumber: 0
            }
        },
        props:{

            size:{
                type:Number,
                required:false,
                default: 6
            },
            topSalesSize:{
                type:Number,
                required:false,
                default: 3
            },
            topRatedSize:{
                type:Number,
                required:false,
                default: 3
            }
        },

        methods: {
            unshowComponent(){
                this.$emit('unshowComponent', false);
            },




            getProducts(){
                axios.get('/products', {})
                    .then(response => (this.products = response['data']));
            },
            getTopSalesProducts(){
                axios.get('/get-sale-products', {})
                    .then(response => (this.topSalesProducts = response['data']));
            },
            getTopRatedProducts(){
                axios.get('/get-rated-products', {})
                    .then(response => (this.topRatedProducts = response['data']));
            },



            nextPage(type){

                switch (type) {
                    case 'products':
                        if( this.pageNumber !== (this.pageCount('products') - 1)){
                            this.pageNumber++;
                        }
                        break;
                    case 'top-sales-products':
                        if( this.pageSalesNumber !== (this.pageCount('top-sales-products') - 1)){
                            this.pageSalesNumber++;
                        }
                        break;
                    case 'top-rated-products':
                        if( this.pageRatedNumber !== (this.pageCount('top-rated-products') - 1)){
                            this.pageRatedNumber++;
                        }
                        break;
                    default:
                        if( this.pageNumber !== (this.pageCount('products') - 1)){
                            this.pageNumber++;
                        }
                }
            },
            prevPage(type){

                switch (type) {
                    case 'products':
                        if( this.pageNumber !== 0){
                            this.pageNumber--;
                        }
                        break;
                    case 'top-sales-products':
                        if( this.pageSalesNumber !== 0){
                            this.pageSalesNumber--;
                        }
                        break;
                    case 'top-rated-products':
                        if( this.pageRatedNumber !== 0){
                            this.pageRatedNumber--;
                        }
                        break;
                    default:
                        if( this.pageNumber !== 0){
                            this.pageNumber--;
                        }
                }
            },


            pageCount(type){

                switch (type) {
                    case 'products':
                        return Math.ceil(this.products.length/this.size);
                        break;
                    case 'top-sales-products':
                        return Math.ceil(this.topSalesProducts.length/this.topSalesSize);
                        break;
                    case 'top-rated-products':
                        return Math.ceil(this.topRatedProducts.length/this.topRatedSize);
                        break;
                    default:
                        return Math.ceil(this.products.length/this.size);
                }
            },
            paginatedData(type){
                var start,end;
                switch (type) {
                    case 'products':
                         start = this.pageNumber * this.size;
                            end = start + this.size;
                        return this.products.slice(start, end);
                        break;
                    case 'top-sales-products':
                         start = this.pageSalesNumber * this.topSalesSize;
                            end = start + this.topSalesSize;
                        return this.topSalesProducts.slice(start, end);
                        break;
                    case 'top-rated-products':
                         start = this.pageRatedNumber * this.topRatedSize;
                            end = start + this.topRatedSize;
                        return this.topRatedProducts.slice(start, end);
                        break;
                    default:
                         start = this.pageNumber * this.size;
                            end = start + this.size;
                        return this.products.slice(start, end);
                }
            }
        },
        beforeMount() {
            this.getProducts();
            this.getTopSalesProducts();
            this.getTopRatedProducts();
        }
    }
</script>