require("./bootstrap");

window.Vue = require("vue").default;
import VueGoodTablePlugin from "vue-good-table";
import "vue-good-table/dist/vue-good-table.css";

Vue.use(VueGoodTablePlugin);

// v-select
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)

Vue.component("Supplier", require("./components/Supplier.vue").default);
Vue.component("Product", require("./components/Product.vue").default);
Vue.component("Purchase", require("./components/Purchase.vue").default);
Vue.component("purchase_list", require("./components/PurchaseList.vue").default);
Vue.component("purchase_edit", require("./components/PurchaseEdit.vue").default);

const app = new Vue({
    el: "#app",
});
