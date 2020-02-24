<script type="text/x-template" id="v-x-home-general-component">
    <div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.pages.home.components.x_general_component.revenue_of_the_spanning_days') }}</h3>
                @include('admin.pages.home.components.inc.card-tools')
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <div class="chart">
                            <v-home-get-spanning-days-component
                                url="{{ route('admin.performances.getSpanningDays') }}"
                                range="{{ request('range', 30) }}"
                                legend="{{ __('admin.pages.home.components.x_general_component.legend.spanning_days') }}"
                            ></v-home-get-spanning-days-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.pages.home.components.x_general_component.revenue_of_this_year') }}</h3>
                @include('admin.pages.home.components.inc.card-tools')
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="chart">
                            <v-home-get-this-year-component
                                url="{{ route('admin.performances.getThisYear') }}"
                                legend="{{ __('admin.pages.home.components.x_general_component.legend.this_year') }}"
                            ></v-home-get-this-year-component>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1>Lorem ipsum dolor.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi beatae commodi cum debitis dicta doloremque harum ipsa molestiae non nulla odio omnis quam quasi qui, sapiente, sequi similique voluptas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-white">
            <div class="card-footer">
                <span class="text-info home-size">
                    {{ __('admin.pages.home.components.x_general_component.reset_text_info') }}
                    {{ __('admin.pages.home.components.x_general_component.reset') }}
                </span>
                <a class="btn btn-success float-right" href="{{ route('admin.home') }}">
                    {{ __('admin.pages.home.components.x_general_component.reset') }}
                </a>
            </div>
        </div>
    </div>
</script>
