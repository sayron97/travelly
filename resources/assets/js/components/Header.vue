<template>
    <div class="main">
        <p>Header</p>
    </div>
</template>
<style lang="scss" scoped>


</style>
<script>
    import axios from 'axios';


    export default {
        data () {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart (slide) {
                this.sliding = true
            },
            onSlideEnd (slide) {
                this.sliding = false
            }
        }
    }
</script>