<script type="text/x-template" id="v-x-settings-general-component">
    <form action="{{ route('admin.settings.store') }}" method="post">
        @csrf
        <div class="=card card-info">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.pages.settings.components.x_general_component.general_settings') }}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <v-settings-set-locale-component
                            :locale="{{ $locale }}"
                            :languages="{{ $languages }}"
                        >
                        </v-settings-set-locale-component>
                    </div>{{-- select language --}}
                    <div class="col-sm-6">
                        <p><strong>Lorem ipsum dolor sit amet</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae consequatur dolorem doloribus fugiat hic.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Lorem ipsum dolor sit amet</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae consequatur dolorem doloribus fugiat hic.</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>Lorem ipsum dolor sit amet</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae consequatur dolorem doloribus fugiat hic.</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-xl-left">{{ __('admin.pages.settings.components.x_general_component.save_changes') }}</button>
                <a  class="btn btn-default float-xl-right" href="{{ route('admin.settings.index') }}">
                    {{ __('admin.pages.settings.components.x_general_component.cancel') }}</a>
            </div>
        </div>
    </form>
</script>
