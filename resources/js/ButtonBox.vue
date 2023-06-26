<template>
  <div class="button_box-fieldtype-wrapper flex -mx-1">
    <div v-for="(option, $index) in options" :key="$index" class="px-1">
      <button
        v-if="option.image.length > 0 || !option.icon"
        :id="name + $index"
        @click.prevent="update(option.value)"
        :class="
          option.value === value
            ? 'border-primary border-2 rounded p-px'
            : 'border-2 rounded border-white p-px'
        "
      >
        <span v-if="!option.image.length > 0 && !option.icon">{{
          option.label || option.value
        }}</span>

        <button_box-image
          v-if="option.image.length > 0"
          :id="option.image[0]"
        />
      </button>
      <button
        v-else
        :id="name + $index"
        @click.prevent="update(option.value)"
        :class="[
          'flex items-center justify-center btn-flat w-12 h-12 leading-loose',
          option.value === value
            ? 'border-blue-400 border-2 rounded p-px'
            : 'border-2 rounded border-white p-px'
        ]"
      >
        <i :class="'text-lg text-grey-80 far fa-' + option.icon"></i>
      </button>
    </div>
  </div>
</template>

<script>
export default {
  mixins: [Fieldtype],

  computed: {
    options() {
      return this.config.options;
    },

    replicatorPreview() {
      var option = _.findWhere(this.config.options, { value: this.value });
      return option ? option.label : this.value;
    }
  },

  methods: {
    focus() {
      document.getElementById(`${this.name}-0`).focus();
    }
  }
};
</script>
