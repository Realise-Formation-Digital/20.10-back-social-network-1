require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import vuetify from "./plugins/vuetify"; // path to vuetify export

import MenuIcon from 'vue-material-design-icons/Menu.vue';
 
Vue.component('menu-icon', MenuIcon);

Vue.use(VueRouter);

let app = new Vue({
    vuetify,
    el: "#app",
    router: new VueRouter(routes)
});
