<template>
    <div class="main">
        <p class="before_you_leave">Before you leave</p>

        <b-container class="row-columns">
        <b-row>
            <b-col>
                <div class="block-title">Visa & documents</div>
                <div class="block-text">
                    There are some things you should take
care of before going to your next
adventure. We’ll help you to get
required visas and documents needed.
                </div>
            </b-col>
            <b-col>
                <div class="block-title">Accomodation</div>
                <div class="block-text">
                    There are some things you should take
                    care of before going to your next
                    adventure. We’ll help you to get
                    required visas and documents needed.
                </div>
            </b-col>
            <b-col>
                <div class="block-title">Transport</div>
                <div class="block-text">
                    There are some things you should take
                    care of before going to your next
                    adventure. We’ll help you to get
                    required visas and documents needed.
                </div>
            </b-col>
        </b-row>
        </b-container>


    </div>
</template>
<style lang="scss" scoped>

    .row-columns{
        margin-top: 40px;
    }

    .before_you_leave {
        margin-top: 70px;
        font-size: 52px;
        font-family: 'Open Sans', sans-serif;
        color: rgb(50, 50, 50);
    }

    .block-title {
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        color: rgb(50, 50, 50);
        text-transform: uppercase;
    }

    .block-text {
        font-size: 15px;
        font-family: 'Open Sans', sans-serif;
        color: rgb(139, 139, 139);
        padding-right: 40px;
    }


</style>
<script>
    import axios from 'axios';


    export default {}
</script>