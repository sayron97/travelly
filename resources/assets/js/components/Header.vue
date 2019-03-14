<template>
    <div class="main">
        <b-img src="img/main.png" fluid alt="Responsive image"/>
        <b-img src="img/logo.png" class="logo" fluid alt="Responsive image"/>
        <div class="travelly">travelly</div>
        <b-img src="img/menu.png" class="menu" fluid alt="Responsive image"/>
        <div class="where_go">Where will you go next?</div>

        <b-row>
            <b-col cols="3"></b-col>
            <b-col>
                <b-input-group>
                    <b-form-input type="text" placeholder="Start typing..."/>

                    <b-input-group-append>
                        <b-button variant="outline-secondary">GO</b-button>
                    </b-input-group-append>
                </b-input-group>
            </b-col>
            <b-col cols="3"></b-col>
        </b-row>
    </div>
</template>
<style lang="scss" scoped>

    .logo {
        margin-top: -1140px;
        margin-left: 100px;
    }

    .travelly {
        font-family: 'Open Sans', sans-serif;
        font-size: 32px;
        color: rgb(244, 243, 238);
        line-height: 1.2;
        margin-top: -600px;
        margin-left: 137px;
    }

    .menu {
        margin-top: -55px;
        margin-left: 1072px;
    }

    .where_go {
        font-size: 52px;
        margin-top: 175px;
        margin-left: 310px;
        font-family: 'Open Sans', sans-serif;
        color: rgb(255, 255, 255);
        line-height: 1.2;
    }

    .input-group{
        margin-left: 80px;
        margin-right: 50px;
        margin-top: 25px;
        width: 400px;
    }

    .form-control{
        border: none;
        border-radius: 0;
    }

    .btn{
        background-color: #fd4f32;
        color: #ffffff;
        width: 95px;
        border-color: #fd4f32;
    }

</style>
<script>
    import axios from 'axios';


    export default {
        data() {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart(slide) {
                this.sliding = true
            },
            onSlideEnd(slide) {
                this.sliding = false
            }
        }
    }
</script>