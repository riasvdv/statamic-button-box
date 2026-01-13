<template>
  <img :src="src" alt="" style="vertical-align: top;" />
</template>

<script>
import { FieldtypeMixin } from '@statamic/cms';

export default {
  mixins: [FieldtypeMixin],

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
