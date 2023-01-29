<template>
    <div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveSupplier">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="row mt-2">
                                    <label for="supplier_code" class="col-5 col-lg-4 d-flex align-items-center">Supplier
                                        Code:</label>
                                    <div class="col-7 col-lg-8">
                                        <input type="text" id="supplier_code" name="supplier_code" readonly
                                            class="form-control shadow-none" v-model="supplier.supplier_code"
                                            autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="name" class="col-5 col-lg-4 d-flex align-items-center">Name:</label>
                                    <div class="col-7 col-lg-8">
                                        <input type="text" id="name" name="name" class="form-control shadow-none"
                                            v-model="supplier.name" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="owner_name" class="col-5 col-lg-4 d-flex align-items-center">Owner
                                        Name:</label>
                                    <div class="col-7 col-lg-8">
                                        <input type="text" id="owner_name" name="owner_name"
                                            class="form-control shadow-none" v-model="supplier.owner_name"
                                            autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="address"
                                        class="col-5 col-lg-4 d-flex align-items-center">Address:</label>
                                    <div class="col-7 col-lg-8">
                                        <textarea id="address" name="address" class="form-control shadow-none"
                                            v-model="supplier.address" autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row mt-2">
                                    <label for="mobile" class="col-5 col-lg-4 d-flex align-items-center">Mobile:</label>
                                    <div class="col-7 col-lg-8">
                                        <input type="text" id="mobile" name="mobile" class="form-control shadow-none"
                                            v-model="supplier.mobile" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="email" class="col-5 col-lg-4 d-flex align-items-center">Email:</label>
                                    <div class="col-7 col-lg-8">
                                        <input type="text" id="email" name="email" class="form-control shadow-none"
                                            v-model="supplier.email" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="previous_due" class="col-5 col-lg-4 d-flex align-items-center">Previous
                                        Due:</label>
                                    <div class="col-7 col-lg-8">
                                        <input type="number" min="0" step="0.01" id="previous_due" name="previous_due"
                                            class="form-control shadow-none" v-model="supplier.previous_due"
                                            autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="previous_due" class="col-5 col-lg-4 d-flex align-items-center"></label>
                                    <div class="col-7 col-lg-8 text-end">
                                        <button type="button" @click="clearData" class="btn btn-sm btn-outline-secondary shadow-none">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Save Supplier
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center">
                                <div class="form-group ImageBackground">
                                    <img :src="imageSrc" class="imageShow" />
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control shadow-none" @change="imageUrl" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="suppliers" :fixed-header="true" :pagination-options="{
                enabled: true,
                perPage: 15,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'before'">
                        <button class="btn btn-sm btn-outline-primary shadow-none" @click="editRow(props.row)">
                            Edit
                        </button>
                        <button class="btn btn-sm btn-outline-danger shadow-none" @click="deleteRow(props.row.id)">
                            Delete
                        </button>
                    </span>
                </template>
            </vue-good-table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            columns: [
                {
                    label: "Code",
                    field: "supplier_code",
                },
                {
                    label: "Supplier Name",
                    field: "name",
                },
                {
                    label: "Mobile",
                    field: "mobile",
                },
                {
                    label: "Address",
                    field: "address",
                    type: "text",
                },
                {
                    label: "Due",
                    field: "previous_due",
                    type: "number",
                },
                {
                    label: "Action",
                    field: "before",
                },
            ],

            suppliers: [],
            supplier: {
                id: "",
                supplier_code: "",
                name: "",
                phone: "",
                owner_name: "",
                email: "",
                address: "",
                previous_due: 0.0,
                image: "",
            },

            imageSrc: location.origin + "/noImage.jpg",
        };
    },

    created() {
        this.getSupplier();
    },

    methods: {
        getSupplier() {
            axios.get(location.origin + "/admin/supplier/fetch").then((res) => {
                this.suppliers = res.data.data.filter(sup => sup.supplier_type != "G");
                this.supplier.supplier_code = res.data.supplier_code;
            });
        },

        saveSupplier(event) {
            if (this.supplier.name == "") {
                alert("Name Field is Empty");
                return;
            }
            if (this.supplier.owner_name == "") {
                alert("Owner Name Field is Empty");
                return;
            }
            if (this.supplier.mobile == "") {
                alert("Mobile Field is Empty");
                return;
            }
            let formdata = new FormData(event.target)
            formdata.append("image", this.supplier.image)
            formdata.append("id", this.supplier.id)
            axios
                .post(location.origin + "/admin/supplier", formdata)
                .then((res) => {
                    $.notify(res.data, "success");
                    this.clearData();
                    this.getSupplier();
                });
        },

        editRow(val) {
            this.supplier = {
                id           : val.id,
                supplier_code: val.supplier_code,
                name         : val.name,
                owner_name   : val.owner_name,
                email        : val.email,
                mobile       : val.mobile,
                address      : val.address,
                previous_due : val.previous_due,
            };

            this.imageSrc = val.image != null ? location.origin + "/" + val.image : location.origin + "/noImage.jpg"
        },
        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/supplier/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getSupplier();
                });
            }
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 200 && img.height === 200) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.supplier.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width} X ${img.width} but require image 200 X 200`);
                    }
                }
            }
        },

        clearData() {
            this.supplier = {
                id          : "",
                name        : "",
                mobile      : "",
                owner_name  : "",
                address     : "",
                previous_due: 0.00,
                image       : "",
            };
            this.getSupplier()
            this.imageSrc = location.origin + "/noImage.jpg"
        },
    },
};
</script>
