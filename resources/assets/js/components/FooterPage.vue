<template>
    <div class="main">

        <b-container class="bv-example-row">
            <b-row>
                <b-col></b-col>
                <b-col class="get-deals">Get hottest deals to your box</b-col>
                <b-col></b-col>
            </b-row>
        </b-container>

        <b-row>
            <b-col cols="3"></b-col>
            <b-col>
                <b-input-group>
                    <b-form-input type="text" placeholder="Email address"/>

                    <b-input-group-append>
                        <b-button variant="outline-secondary">SUBSCRIBE</b-button>
                    </b-input-group-append>
                </b-input-group>
            </b-col>
            <b-col cols="3"></b-col>
        </b-row>

    </div>
</template>
<style lang="scss" scoped>

    .get-deals {
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        color: rgb(50, 50, 50);
        text-transform: uppercase;
    }
    .main{
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .input-group{
        margin-left: 80px;
        margin-right: 50px;
        margin-top: 25px;
        width: 500px;
    }

    .form-control{
        border: none;
        border-radius: 0;
        background-color: #eeeeee;
    }

    .btn{
        background-color: #fd4f32;
        color: #ffffff;
        width: 150px;
        border-color: #fd4f32;
    }



</style>
<script>
    import axios from 'axios';


    export default {

    }
</script>