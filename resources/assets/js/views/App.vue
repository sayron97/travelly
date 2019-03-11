<template>
    <div class="main">
        <div class="container-fluid">

            <app-header></app-header>
            <div class="container-custom">

                <router-view></router-view>

                <before-leave></before-leave>

            </div>
        </div>
        <div class="container-fluid">

            <footer-page></footer-page>
            <footer-panel></footer-panel>
        </div>
    </div>
</template>
<style lang="scss" scoped>


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