import Home from "./components/Home.vue";
import Post from "./components/Post.vue";

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
    ],
};
