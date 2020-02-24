<script type="text/x-template" id="v-x-api-users-create-api-token-component">
    <div class="card card-info">
        <form class="form-horizontal" action="{{ route('admin.apiUsers.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">
                        {{ __('admin.pages.api_users.components.x_create_api_token_component.name') }}
                    </label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            placeholder="{{ __('admin.pages.api_users.components.x_create_api_token_component.placeholder_name') }}"
                            required
                        >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">
                        {{ __('admin.pages.api_users.components.x_create_api_token_component.description') }}
                    </label>
                    <div class="col-sm-10">
                        <textarea
                            name="description"
                            class="form-control"
                            cols="30"
                            rows="1"
                            placeholder="{{ __('admin.pages.api_users.components.x_create_api_token_component.placeholder_description') }}"
                            required
                        ></textarea>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">
                    {{ __('admin.pages.api_users.components.x_create_api_token_component.send') }}
                </button>
                <a href="{{ route('admin.apiUsers.index') }}" class="btn btn-default float-right">
                    {{ __('admin.pages.api_users.components.x_create_api_token_component.cancel') }}
                </a>
            </div>

        </form>
    </div>
</script>
