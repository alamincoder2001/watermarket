<template>
    <div>
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveBlog">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="row mt-2">
                                    <label
                                        for="title"
                                        class="col-5 col-lg-4 d-flex align-items-center"
                                        >Title:</label
                                    >
                                    <div class="col-7 col-lg-8">
                                        <input
                                            type="text"
                                            name="title"
                                            v-model="blog.title"
                                            id="title"
                                            class="form-control shadow-none"
                                        />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label
                                        for="date"
                                        class="col-5 col-lg-4 d-flex align-items-center"
                                        >Publish Date:</label
                                    >
                                    <div class="col-7 col-lg-8">
                                        <input
                                            type="date"
                                            name="date"
                                            id="date"
                                            v-model="blog.date"
                                            class="form-control shadow-none"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <ckeditor
                                            :editor="editor"
                                            v-model="blog.description"
                                        ></ckeditor>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label
                                        for="previous_due"
                                        class="col-5 col-lg-4 d-flex align-items-center"
                                    ></label>
                                    <div class="col-7 col-lg-8 text-end">
                                        <button
                                            type="button"
                                            @click="clearData"
                                            class="btn btn-sm btn-outline-secondary shadow-none"
                                        >
                                            Reset
                                        </button>
                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-success shadow-none"
                                        >
                                            Save Blog
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-lg-2 d-flex justify-content-center align-items-center"
                            >
                                <div class="form-group ImageBackground">
                                    <img :src="imageSrc" class="imageShow" />
                                    <label for="image">Image</label>
                                    <input
                                        type="file"
                                        id="image"
                                        class="form-control shadow-none"
                                        @change="imageUrl"
                                    />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <div class="col-12 col-lg-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="technicians" :fixed-header="true" :pagination-options="{
                enabled: true,
                perPage: 15,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'before'">
                        <button class="btn btn-sm text-white shadow-none" :class="props.row.status == 'p'? 'btn-warning' : 'btn-success'" @click="editRow(props.row)">
                            {{ props.row.status == 'p' ? 'Pending' : 'Approved' }}
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
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import axios from "axios";
import moment from "moment";
export default {
    data() {
        return {
            editor: ClassicEditor,
            columns: [
                {
                    label: "Technician Code",
                    field: "technician_code",
                },
                {
                    label: "Name",
                    field: "name",
                },
                {
                    label: "Username",
                    field: "username",
                },
                {
                    label: "Mobile",
                    field: "mobile",
                },
                {
                    label: "Email",
                    field: "email",
                },
                {
                    label: "Action",
                    field: "before",
                },
            ],
            technicians: [],
        };
    },

    created() {
        this.getTechnician();
    },

    methods: {
        getTechnician() {
            axios.get(location.origin + "/admin/technician/fetch")
                .then(res => {
                    this.technicians = res.data
                })
        }
    },
};
</script>
