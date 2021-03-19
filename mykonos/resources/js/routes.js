import Home from "./components/pages/Home.vue";
import Like from "./components/pages/Like.vue";
import Login from "./components/pages/Login.vue";
import Post from "./components/pages/Post.vue";
import Register from "./components/pages/Register.vue";
import Settings from "./components/pages/Settings.vue";
import Taxonomy from "./components/pages/Taxonomy.vue";
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
            path: "/like",
            name:'Like',
         component: Like,
        },

        {
            path: "/login",
            name:'Login',
         component: Login,
        },
      
        {
            path: "/post",
            name:'post',
            component: Post,
        },
        {
            path: "/register",
            name:'Register',
         component: Register,
        },
    
        {
            path: "/settings",
            name:'Settings',
         component: Settings,
        },

        {
            path: "/taxonomy",
            name:'Taxonomy',
         component: Taxonomy,
        },
      
     
    ],
}
