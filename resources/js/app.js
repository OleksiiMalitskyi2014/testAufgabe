import {createApp} from 'vue'

import router from './router';
import App from "./components/App";
import axios from 'axios';
import VueAxios from 'vue-axios';


const app = createApp({extends: App,})
    .use(router)
    .use(VueAxios,axios)

app.config.globalProperties.mapKey = process.env.MIX_MAP_KEY

app.mount("#app");