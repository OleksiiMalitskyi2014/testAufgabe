<template>
    <div>
        <ul v-for="(partner, index) in partners">
            <li>{{partner.name}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        components: {

        },
        data() {
            return {
                partners: [],
            }
        },
        methods:
            {
                getPartners: function () {
                    // axios
                }
            }
    }
</script>