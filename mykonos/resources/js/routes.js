import Home from "./components/Home.vue";
import Post from "./components/Post.vue";
import Header from "./components/Header.vue";
import VueRouter from "vue-router";

export default {
    mode: "history",

    routes: [
        {
            path: "/",
            name:'Home',
            component: Home,
        },
        {
            path: "/post",
            name:'post',
            component: Post,
        },
        {
            path: "/header",
            name:'Header',
         component: Header,
        },
       
    ],
}
