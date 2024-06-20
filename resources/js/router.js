import {createRouter, createWebHistory} from "vue-router";

import Generator from "./components/HomeComponent";

const routes = [
    {
        path: "/",
        name: "generator",
        component: Generator,
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
