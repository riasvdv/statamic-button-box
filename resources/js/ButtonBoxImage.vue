<template>
  <img :src="src" alt="" style="vertical-align: top;" />
</template>

<script>
export default {
  mixins: [Fieldtype],

  props: ["id"],

  data() {
    return {
      src: ""
    };
  },

  mounted() {
    this.getImage(this.id);
  },

  methods: {
    getImage(assets) {
      const vm = this;
      this.$axios
        .post(cp_url('assets-fieldtype'), {
          assets,
        })
        .then(response => {
          vm.src = response.data[0].url;
        });
    }
  }
};
</script>
