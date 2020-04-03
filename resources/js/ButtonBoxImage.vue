<template>
    <img :src="src" alt="" style="vertical-align: top;">
</template>

<script>
    export default {
        mixins: [Fieldtype],

        props: ['id'],

        data() {
            return {
                src: '',
            }
        },

        mounted() {
           this.getImage(this.id);
        },

        methods: {
            getImage(id) {
                const vm = this;
                this.$axios.get(cp_url('assets-fieldtype'), {
                    params: { assets: [id] }
                }).then(response => {
                    vm.src = response.data[0].url;
                });
            }
        }
    };
</script>
