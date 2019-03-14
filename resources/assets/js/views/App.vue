<template>
    <div class="main">
        <div class="grey-container">
        <div class="container-custom">

            <app-header></app-header>

        </div>

        <div class="container-middle">
        <router-view></router-view>
        </div>
        </div>
        <div class="container-middle-white">
        <before-leave></before-leave>
        </div>
        <div class="container-fluid">

            <footer-page></footer-page>
        </div>
        <div class="container-fluid-grey">
            <footer-panel></footer-panel>
        </div>
    </div>
</template>
<style lang="scss" scoped>

    .container-fluid {
        padding-right: 0;
        padding-left: 0;
        &-grey{
            background-color: #eeeeee;
        }

    }
    .container-custom {
        width: 1200px;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 250px;
    }
    .grey-container {
        background-color: #eeeeee;
    }
    .container-middle{
        width: 1000px;
        margin-right: auto;
        margin-left: auto;
    }
    .container-middle-white{
        width: 1000px;
        margin-right: auto;
        margin-left: auto;
        background-color: white !important;
    }

</style>
<script>
    import AppHeader from '../components/Header.vue'
    import MainList from '../components/MainList.vue'
    import FooterPage from '../components/FooterPage.vue'
    import FooterPanel from '../components/FooterPanel.vue'
    import BeforeLeave from '../components/BeforeLeave.vue'

    export default {
        components: {
            AppHeader: AppHeader,
            MainList: MainList,
            FooterPage: FooterPage,
            FooterPanel: FooterPanel,
            BeforeLeave: BeforeLeave
        },
        data() {
            return {};
        },
        computed: {}

    }
</script>