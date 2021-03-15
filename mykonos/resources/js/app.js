require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import vuetify from "./plugins/vuetify"; // path to vuetify export

Vue.use(VueRouter);

let app = new Vue({
    vuetify,
    el: "#app",
    router: new VueRouter(routes)
});
