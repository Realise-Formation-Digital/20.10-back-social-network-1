import Home from "./components/Home.vue";
import Post from "./components/Post.vue";
import Header from "./components/Header.vue";
import VueRouter from "vue-router";

export default {
    mode: "history",

    routes: [
        {
            path: "/",
            component: Home,
        },
        {
            path: "/post",
            component: Post,
        },
        {
            path: "/header",
         component: Header,
        },
    ],
}
