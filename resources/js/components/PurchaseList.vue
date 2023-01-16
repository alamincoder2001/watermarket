<template>
    <div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form @submit.prevent="getPurchase">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group m-0">
                                    <select class="form-select shadow-none" v-model="searchBy">
                                        <option value="">All</option>
                                        <option value="invoice">By Invoice</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3" :style="{ display: searchBy == 'invoice' ? '' : 'none' }">
                                <div class="form-group m-0">
                                    <v-select :options="invoices" id="invoice" v-model="selectedInvoice" label="invoice"></v-select>
                                </div>
                            </div>
                            <div class="col-lg-2" :style="{ display: searchBy == 'invoice' ? 'none' : '' }">
                                <div class="form-group m-0">
                                    <input type="date" class="form-control" v-model="dateFrom" />
                                </div>
                            </div>
                            <div class="col-lg-2" :style="{ display: searchBy == 'invoice' ? 'none' : '' }">
                                <div class="form-group m-0">
                                    <input type="date" class="form-control" v-model="dateTo" />
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-info btn-sm shadow-none px-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body" :style="{display: purchases.length > 0 ? '':'none'}">
                    <table class="table table-bordered m-0">
                        <thead style="background: #59d9ff;">
                            <tr>
                                <th style="text-align:center;width:8%;">Sl</th>
                                <th style="text-align:center;width:10%;">#Invoice</th>
                                <th style="text-align:center;width:10%;">Date</th>
                                <th style="text-align:center">Supplier Details</th>
                                <th style="text-align:center">Amount Details</th>
                                <th style="text-align:center;width: 12%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="(item,index) in purchases">
                                <tr>
                                    <td class="text-center">{{ index + 1 }}</td>
                                    <td class="text-center">{{ item.invoice }}</td>
                                    <td class="text-center">{{ formatDate(item.date) }}</td>
                                    <td>
                                        <span>Supplier Name: {{ item.name }}</span><br />
                                        <span>Mobile: {{ item.mobile }}</span><br />
                                        <span>Address: {{ item.address }}</span><br />
                                        <span v-if="item.supplier_type != 'G'">Previous Due: {{ item.previous_due }}</span>
                                        <span v-else>General Supplier</span>
                                    </td>
                                    <td>
                                        <span>SubTotal: {{ item.subtotal }}</span><br />
                                        <span>Total: {{ item.total }}</span><br />
                                        <span>Due: {{ item.due }}</span><br />
                                        <span v-if="item.discount != 0">Discount ({{ item.discount }}%): {{ item.discount_amount }}</span><br />
                                        <span v-if="item.vat != 0">Vat ({{ item.vat }}%): {{ item.vat_amount }}</span><br />
                                        <span v-if="item.transport_cost != 0">Transport Cost: {{ item.transport_cost }}</span>
                                    </td>
                                    <td>
                                        <div class="input-group gap-2">
                                            <button title="Purchase Invoice" type="button" style="background: none;" class="shadow-none outline-none border-0"><i class="fas fa-file text-info"></i></button>
                                            <a :href="`${'/admin/purchase/edit/'+item.invoice}`" title="Purchase Edit" class="m-0 shadow-none outline-none border-0"><i class="fas fa-edit text-primary"></i></a>
                                            <button title="Purchase Delete" @click="InvoiceDelete(item.id, index)" type="button" style="background: none;" class="shadow-none outline-none border-0"><i class="fas fa-trash text-danger"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <div class="card-body" :style="{display: purchases.length > 0 ?'none':'' }">
                    <p class="m-0 text-center">Not Found Data in Table</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
export default {
    data() {
        return {
            searchBy: "",
            dateFrom: moment().format("YYYY-MM-DD"),
            dateTo: moment().format("YYYY-MM-DD"),
            invoices: [],
            selectedInvoice: null,
            purchases: []
        }
    },

    created() {
        this.getInvoice();
    },

    watch: {
        searchBy(){
            if (this.searchBy == "") {
                this.selectedInvoice = null
            }
        }
    },

    methods: {
        getInvoice() {
            axios.post("/admin/purchase/fetch", { invoice: "" })
                .then(res => {
                    this.invoices = res.data.purchases
                })
        },
        getPurchase() {
            if(this.searchBy == "invoice" && this.selectedInvoice == null){
                alert("Select first Invoice")
                document.querySelector("#invoice [type='search']").focus()
                return
            }

            let data = {
                invoice: this.searchBy != "" ? this.selectedInvoice.invoice : "",
                dateFrom: this.searchBy != "" ? "" : this.dateFrom,
                dateTo: this.searchBy != "" ? "" : this.dateTo
            }

            axios.post("/admin/purchase/fetch", data)
                .then(res => {
                    this.purchases = res.data.purchases
                })
        },
        InvoiceDelete(id, sl){
            if(confirm("Are you sure want to delete")){
                axios.post("/admin/purchase/delete", {id: id}).then((res) => {
                    alert(res.data);
                    var index = this.purchases.indexOf(sl);
                    this.purchases.splice(index, 1);
                });
            }
        },
        formatDate(date) {
            return moment(date).format("DD-MM-YYYY");
        },
    },
}
</script>

<style>
    #invoice [role="combobox"] {
        padding: 0 !important;
    }
</style>
