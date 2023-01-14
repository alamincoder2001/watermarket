require("./bootstrap");

window.Vue = require("vue").default;
import VueGoodTablePlugin from "vue-good-table";
import "vue-good-table/dist/vue-good-table.css";

Vue.use(VueGoodTablePlugin);

Vue.component("Supplier", require("./components/Supplier.vue").default);

const app = new Vue({
    el: "#app",
});
