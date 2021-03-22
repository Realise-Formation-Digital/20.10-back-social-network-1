import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./components/pages/Home.vue";
import Users from "./components/pages/Users.vue";
import Posts from "./components/pages/Posts.vue";
import Taxonomies from "./components/pages/Taxonomies.vue";
import Likes from "./components/pages/Likes.vue";
import Login from "./components/pages/Login.vue";
import Register from "./components/pages/Register.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: "/",
            component: Home
        },

        {
            path: "/posts",
            component: Posts
        },

        {
            path: "/users",
            component: Users
        },

        {
            path: "/taxonomies",
            component: Taxonomies
        },

        {
            path: "/likes",
            component: Likes
        },

        {
            path: "/login",
            component: Login
        },
        {
            path: "/register",
            component: Register
        }
    ],
    mode: "history"
});
