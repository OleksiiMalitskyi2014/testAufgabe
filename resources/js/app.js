import {createApp} from 'vue'

import router from './router';
import App from "./components/App";
import axios from 'axios';
import VueAxios from 'vue-axios';

import './../css/app.css'

createApp({extends: App,})
    .use(router)
    .use(VueAxios,axios)
    .mount("#app");
