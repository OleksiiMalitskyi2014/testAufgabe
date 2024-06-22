import {createRouter, createWebHistory} from "vue-router";

import Home from "./components/HomeComponent";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
]

const router = createRouter({
    history: createWebHistory('/'),
    // scrollBehavior() {
    //     return { top: 0 }
    // },
    routes
})
export default router;
