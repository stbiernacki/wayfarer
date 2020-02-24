<script type="text/x-template" id="v-x-api-users-access-to-api-component">
    <div>
        <div class="row">
            <div class="col-6 alert alert-info">
                <img src="{{ asset('assets/img/api-for-wayfarer.png') }}" alt="" width="100%">
            </div>
            <div class="col-6 alert alert-info text-center">
                <h1>{{ __('admin.pages.api_users.index.tabs.access_to_api') }}</h1>
                <img src="{{ asset('assets/img/swagger.png') }}" alt="" width="50%">
                <div class="alert alert-heading" role="alert">
                    {{ __('admin.pages.api_users.components.x_access_to_api_component.alert_heading') }}
                    <a class="api-users-token" href="/api/docs" target="_blank">/api/docs</a>.
                </div>
            </div>
        </div>
    </div>
</script>
