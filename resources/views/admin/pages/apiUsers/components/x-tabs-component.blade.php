<script type="text/x-template" id="v-x-api-users-tabs-component">
    <div class="card">
        <div class="card-header">
            <ul>
            <span
                class="api-users-tab"
                :class="{ 'api-users-activeTab': selectedTab === tab }"
                v-for="(tab, index) in allTabs"
                :key="index"
                @click="selectedTab = tab"
            >
                @{{ tab }}
            </span>
            </ul>
        </div>

        <div class="card-body container-fluid">
            <div v-show="selectedTab === '{{ __('admin.pages.api_users.index.tabs.access_to_api') }}'">
                <v-api-users-access-to-api-component></v-api-users-access-to-api-component>
            </div>

            <div v-show="selectedTab === '{{ __('admin.pages.api_users.index.tabs.create_api_token') }}'">
                <v-api-users-create-api-token-component></v-api-users-create-api-token-component>
            </div>

            <div v-show="selectedTab === '{{ __('admin.pages.api_users.index.tabs.list_of_api_users') }}'">
                <v-api-users-list-of-api-users-component></v-api-users-list-of-api-users-component>
            </div>
        </div>
    </div>
</script>
