Vue.component('v-settings-set-locale-component', {
    props: {
        locale: {
            type: Object,
            required: true
        },
        languages: {
            type: Object,
            required: true
        },
    },
    template: '#v-x-settings-select-language-component'
});

Vue.component('v-settings-general-component', {
    template: '#v-x-settings-general-component'
});
