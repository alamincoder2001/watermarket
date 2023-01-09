<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Example Component</div>

                <div class="card-body">
                    I'm an example component.
                    {{ user }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: "Al Amin Islam"
        };
    },
};
</script>
