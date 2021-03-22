import Vue from "vue";
import App from "./App.vue";
import moment from "moment";
import router from "./routes";
import vuetify from "./plugins/vuetify";

require("./bootstrap");

var truncateFilter = function(text, length, clamp) {
    clamp = clamp || "...";
    var node = document.createElement("div");
    node.innerHTML = text;
    var content = node.textContent;
    return content.length > length ? content.slice(0, length) + clamp : content;
};

Vue.filter("truncate", truncateFilter);

Vue.filter("formatDate", function(value) {
    if (value) {
        return moment(String(value))
            .locale(lang)
            .format("LL");
    }
});

const app = new Vue({
    el: "#app",
    components: { App },
    vuetify,
    router
});
