require("./bootstrap");

window.Vue = require("vue").default;
import VueGoodTablePlugin from "vue-good-table";
import "vue-good-table/dist/vue-good-table.css";

Vue.use(VueGoodTablePlugin);

import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)

import moment from 'moment'
Vue.use(moment)

Vue.component("Supplier", require("./components/Supplier.vue").default);
Vue.component("Product", require("./components/Product.vue").default);
Vue.component("Purchase", require("./components/Purchase.vue").default);

const app = new Vue({
    el: "#app",
});
