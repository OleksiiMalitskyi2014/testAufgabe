<template>
    <div id="home">
        <div class="title-wrapper">
            <h1>Service Partners</h1>
        </div>
        <div>
            <partners-component></partners-component>
        </div>
    </div>
</template>
<style>

</style>

<script>
    import PartnersComponent from "./PartnersComponent";
    import home from "./../../sass/home.scss"

    export default {
        components: {
           PartnersComponent,
        },
        data() {
            return {
                //
            }
        },
        mounted() {
            //
        },
        methods: {
            //
        }
    }
</script>
