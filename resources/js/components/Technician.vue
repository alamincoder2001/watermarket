<template>
    <div>
        <div class="col-12 col-lg-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="technicians" :fixed-header="true" :pagination-options="{
                enabled: true,
                perPage: 15,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'before'">
                        <button class="btn btn-sm text-white shadow-none"
                            :class="props.row.status == 'p' ? 'btn-warning' : 'btn-success'" @click="editRow(props.row)">
                            {{ props.row.status == 'p' ? 'Pending' : 'Approved' }}
                        </button>
                        <button class="btn btn-sm btn-outline-success shadow-none" @click="Show(props.row)">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger shadow-none" @click="deleteRow(props.row.id)">
                            <i class="fas fa-trash"></i>
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
        },
        Show(row){
            console.log(row);
        },

        deleteRow(rowId){
            console.log(rowId);
        },

    },
};
</script>
