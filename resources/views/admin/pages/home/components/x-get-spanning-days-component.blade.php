<script type="text/x-template" id="v-x-home-get-spanning-days-component">
    <div>
        <div>
            <label>{{ __('admin.pages.home.components.x_general_component.how_many_days') }}</label>
            <label>
                <select v-model="range" @change="reload">
                    <option v-for="n in 180"> @{{ n }}</option>
                </select>
            </label>
        </div>
        <canvas  style="min-height: 250px; max-width: 100%;" ref="dynamic" ></canvas>
    </div>
</script>
