<template>
  <div class="button_box-fieldtype flex -mx-1">
    <div v-for="(option, $index) in options" :key="$index" class="px-1">
      <Button
        v-if="option.image.length > 0 || !option.icon"
        :id="name + $index"
        @click.prevent="update(option.value)"
        size="lg"
        :variant="option.value === value ? 'pressed' : 'filled'"
        :text="!option.image.length > 0 && option.icon ? (option.label || option.value) : ''"
        style="height: 8rem; padding: 1rem;"
      >
          <button_box-image
              class="h-24"
            v-if="option.image.length > 0"
            :id="option.image[0]"
          />
      </Button>
      <Button
        v-else
        :id="name + $index"
        @click.prevent="update(option.value)"
        :variant="option.value === value ? 'pressed' : 'default'"
        :icon="option.icon"
        size="lg"
      />
    </div>
  </div>
</template>

<script>
import { FieldtypeMixin } from '@statamic/cms';
import { Button, Icon } from '@statamic/cms/ui';

export default {
  mixins: [FieldtypeMixin],

  components: {
    Button,
    Icon,
  },

  computed: {
    options() {
      return this.config.options;
    },

    replicatorPreview() {
      var option = this.config.options.find(o => o.value === this.value);

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
