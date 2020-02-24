<script type="text/x-template" id="v-x-settings-select-language-component">
    <div class="form-group">
        <label>{{ __('admin.pages.settings.components.x_select_language_component.choose_language') }}</label>
        <select class="form-control" name="locale">
            <option
                v-for="(language, index) in languages"
                :value="index"
                :selected="index === locale.lang"
                v-text="language"
            >
            </option>
        </select>
    </div>
</script>
