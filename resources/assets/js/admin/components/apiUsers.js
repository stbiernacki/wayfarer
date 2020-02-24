Vue.component('v-api-users-list-of-api-users-component', {
    template: '#v-x-api-users-list-of-api-users-component'
});

Vue.component('v-api-users-create-api-token-component', {
    template: '#v-x-api-users-create-api-token-component'
});

Vue.component('v-api-users-access-to-api-component', {
    template: '#v-x-api-users-access-to-api-component'
});

Vue.component('v-api-users-tabs-component', {
    props: ['tabs'],
    template: '#v-x-api-users-tabs-component',
    data() {
        return {
            allTabs: this.getTabs(),
            selectedTab: this.getTabs()[0]
        }
    },
    methods: {
        getTabs() {
            return this.tabs;
        }
    }
});
