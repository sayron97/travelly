<template>
    <div class="main">
        <div class="top_destinations">TOP DESTINATIONS</div>
        <p class="some_destinations">Some of the top destinations for your next summer adventure.</p>


        <b-row>
            <b-col>
                <b-card
                        title="Amazing Australia"
                        img-src="img/1.png"
                        img-alt="Image"
                        img-top
                        tag="article"
                        style="max-width: 20rem;"
                        class="mb-3"
                >
                    <span class="price">$1,095</span>
                    <b-card-text>
                        Become inspired to travel to Europe. Discover fantastic things to do & places to go.
                    </b-card-text>
                </b-card>
            </b-col>
            <b-col>
                <b-card
                        title="Ancient south America"
                        img-src="img/2.png"
                        img-alt="Image"
                        img-top
                        tag="article"
                        style="max-width: 20rem;"
                        class="mb-2"
                >
                    <span class="price">$1,295</span>
                    <b-card-text>
                        Become inspired to travel to Europe. Discover fantastic things to do & places to go.
                    </b-card-text>
                </b-card>
            </b-col>
            <b-col>
                <b-card
                        title="Modern North America"
                        img-src="img/3.png"
                        img-alt="Image"
                        img-top
                        tag="article"
                        style="max-width: 20rem;"
                        class="mb-2"
                >
                    <span class="price">$649</span>
                    <b-card-text>
                        Become inspired to travel to Europe. Discover fantastic things to do & places to go.
                    </b-card-text>
                </b-card>
            </b-col>
            <b-col>
                <b-card
                        title="Classic Europe"
                        img-src="img/4.png"
                        img-alt="Image"
                        img-top
                        tag="article"
                        style="max-width: 20rem;"
                        class="mb-2"
                >
                    <span class="price">$1,295</span>
                    <b-card-text>
                        Become inspired to travel to Europe. Discover fantastic things to do & places to go.
                    </b-card-text>
                </b-card>
            </b-col>
        </b-row>


        <div>

        </div>
    </div>
</template>
<style>

    .top_destinations {
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        color: rgb(50, 50, 50);
    }

    .some_destinations {
        font-size: 15px;
        font-family: 'Open Sans', sans-serif;
        color: rgb(139, 139, 139);
    }

    .col{
        padding-left: 5px;
        padding-right: 5px;
    }

    .card-title {
        font-size: 14px;
        font-family: 'Montserrat', sans-serif;
        color: rgb(50, 50, 50);
        text-transform: uppercase;
    }

    .price{
        position: absolute;
        margin-left: 170px;
        margin-top: -80px;
        font-size: 12px;
        font-family: 'Montserrat', sans-serif;
        color: rgb(255, 255, 255);
        text-transform: uppercase;
    }




</style>
<script>
    import axios from 'axios';


    export default {

    }
</script>