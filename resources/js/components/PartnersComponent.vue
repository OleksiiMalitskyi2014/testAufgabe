<template>
    <div id="partners">
        <ul>
            <li v-for="(partner, index) in partners">
                <div class="title">{{partner.name}}</div>
                <div class="description">
                    <imd src="/images/map-marker.svg" width="20" height="30"/>
                    {{partner.street}}, {{partner.haus_nr}}
                </div>
            </li>
        </ul>
        <map-component v-if="partners.length > 0" :data="partners"></map-component>
    </div>
</template>

<script>
    import MapComponent from './MapComponent.vue'
    import partners from "./../../sass/partners.scss"
    import axios from 'axios'

    export default {
        components: {
            MapComponent,
        },
        data() {
            return {
                partners: [],
            }
        },
        mounted() {
            this.getPartners();
        },
        methods: {
            getPartners: function () {
                axios.get('/api/partners').then((res) => {
                    if (res.data.status !== 422) {
                        this.partners = res.data.data;
                    }
                })
            },
        }
    }
</script>