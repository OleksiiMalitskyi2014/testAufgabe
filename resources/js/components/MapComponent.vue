<template>

<div id="map-wrapper">
    <GoogleMap
            :api-key="mapKey"
            style="width: 500px; height: 500px;border-radius: 4px;"
            :center="center"
            :zoom="6"
    >
        <MarkerCluster>
            <Marker
                    v-for="(location, i) in locations"
                    :key="i"
                    :options="{ position: location }"
            >
                <InfoWindow>
                    <div class="list">
                        {{data[i].name}}
                    </div>
                    <div class="list">
                        {{data[i].email}}
                    </div>
                    <div class="list">
                        {{data[i].phone}}
                    </div>
                    <div class="list">
                        {{data[i].website}}
                    </div>
                </InfoWindow>
            </Marker>
        </MarkerCluster>
    </GoogleMap>
</div>
</template>

<script>
    import { GoogleMap, Marker, MarkerCluster, InfoWindow } from 'vue3-google-map'
    export default {
        components: {
            GoogleMap,
            Marker,
            MarkerCluster,
            InfoWindow,
        },
        props: {
            data: {type: Array},
        },
        data() {
            return {
                locations: [],
                center: {
                    lat: 51.1657,
                    lng: 10.4515
                }
            }
        },
        mounted() {
            this.setLocations();
        },
        methods: {
            setLocations: function(){
                for(let key in this.data) {
                    this.locations.push({lat: this.data[key].latitude, lng: this.data[key].longitude})
                }
            }
        }
    }
</script>