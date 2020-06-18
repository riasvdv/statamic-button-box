Vue.component('button_box-image', {
    mixins: [Fieldtype],
    props: ['id'],

    template: `
        <img :src="src" alt="" style="vertical-align: top;">
    `,

    data() {
        return {
            src: '',
        }
    },

    ready() {
        this.getImage(this.id);
    },

    methods: {
        getImage(id) {
            const vm = this;

            this.$http.post(cp_url('assets/get'), { assets: [id] }, (response) => {
                vm.src = response[0].url;
            });
        }
    }
});

Vue.component('button_box-fieldtype', {

    mixins: [Fieldtype],

    template: `
        <div class="button_box-fieldtype-wrapper flex -mx-1">
            <div
                    v-for="(index, option) in options"
                    :key="$index"
                    class="px-1"
            >
                <button
                    v-if="option.image || !option.icon"
                    :id="name + $index"
                    @click.prevent="data = option.value"
                    :class="option.value === data ? 'border-blue border-2 rounded p-px' : 'border-2 rounded border-white p-px'"
                >
                    <span v-if="!option.image > 0 && !option.icon">{{ option.label || option.value }}</span>
    
                    <button_box-image v-if="option.image" :id="option.image" />
                </button>
                <button
                    v-else
                    :id="name + $index"
                    @click.prevent="data = option.value"
                    :class="[
                        'flex items-center justify-center btn-flat w-16 h-12 leading-loose',
                        option.value === data ? 'border-blue border-2 rounded p-px' : 'border-2 rounded border-white p-px'
                    ]"
                >
                    <i :class="'text-lg text-grey-80 far fa-' + option.icon"></i>
                </button>
            </div>
        </div>
    `,

    computed: {
        options() {
            return this.config.options;
        },

        replicatorPreview() {
            var option = _.findWhere(this.config.options, {value: this.value});
            return (option) ? option.label : this.data;
        },
    },

    methods: {
        focus() {
            document.getElementById(`${this.name}-0`).focus();
        },
    },

    ready: function() {
        //
    }

});
