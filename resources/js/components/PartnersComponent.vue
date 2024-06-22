<template>
    <div>
        <ul v-for="(partner, index) in partners">
            <li>{{partner.name}}</li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        components: {

        },
        data() {
            return {
                partners: [],
            }
        },
        mounted() {
            this.getPartners();
        },
        methods:
            {
                getPartners: function () {
                    axios.get('/api/partners').then((res)=>{
                        if(res.data.status !== 422) {
                            this.partners = res.data.data;
                        }
                    })
                }
            }
    }
</script>