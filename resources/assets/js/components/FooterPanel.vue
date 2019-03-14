<template>
    <div class="main">


        <div>
            <b-navbar toggleable="lg" type="dark" variant="info">

                <b-navbar-toggle target="nav_collapse" />

                <b-collapse is-nav id="nav_collapse">
                    <b-navbar-nav>
                        <b-nav-item href="#">Copyright © 2014 Travelly. All Rights Reserved. Designed for Despreneur.</b-nav-item>
                    </b-navbar-nav>

                    <!-- Right aligned nav items -->
                    <b-navbar-nav class="ml-auto">
                        <b-navbar-nav>
                            <b-nav-item class="foot-buttons" href="#">HOME</b-nav-item>
                            <b-nav-item class="foot-buttons" href="#">ABOUT</b-nav-item>
                            <b-nav-item class="foot-buttons" href="#">BLOG</b-nav-item>
                            <b-nav-item class="foot-buttons" href="#">PRESS</b-nav-item>
                            <b-nav-item class="foot-buttons" href="#">CONTACT</b-nav-item>
                        </b-navbar-nav>


                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </div>


    </div>
</template>
<style lang="scss" scoped>

    .bg-info {
        background-color: #eeeeee !important;
    }

    .nav-link {
        font-size: 14px;
        font-family: 'Open Sans', sans-serif;
        color: #8b8b8b !important;
        line-height: 1.571;
    }

    .foot-buttons {
            font-size: 14px;
        font-family: 'Montserrat', sans-serif;
            color: rgb(50, 50, 50);
            text-transform: uppercase;

    }

</style>
<script>
    import axios from 'axios';


    export default {

    }
</script>