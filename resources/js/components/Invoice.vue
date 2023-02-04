<template>
    <div>
        <h5 class="modal-title text-center text-uppercase" style="border-bottom: 1px dashed #cbcbcb">Order Invoice</h5>
        <table class="table table-hover table-bordered mt-2">
            <thead style="background: #2f8cff">
                <tr>
                    <th class="text-white text-center">Sl</th>
                    <th class="text-white text-center">
                        Product Name
                    </th>
                    <th class="text-white text-center">
                        Quantity
                    </th>
                    <th class="text-white text-center">
                        Unit Price
                    </th>
                    <th class="text-white text-center">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in modalData">
                    <td>{{ ++index }}</td>
                    <td>{{ item.name }}</td>
                    <td class="text-center">
                        {{ item.quantity }}
                    </td>
                    <td class="text-center">
                        {{ item.unit_price }}
                    </td>
                    <td class="text-end">{{ item.total }}</td>
                </tr>
                <tr v-if="modalData.length > 0">
                    <th colspan="2" class="text-center">
                        Total
                    </th>
                    <th class="text-center">
                        {{
                            modalData.reduce((acc, pre) => {
                                return acc + +pre.quantity;
                            }, 0)
                        }}
                    </th>
                    <th class="text-end" colspan="2">
                        {{ modalData.reduce((acc, pre) => { return acc + +pre.total; }, 0).toFixed(2) }}
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script >
export default {
    props: {modalData: Array},
};
</script>