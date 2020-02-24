<?php


namespace App\Repository\Helpers;


/**
 * Trait Settings
 * @package App\Repository\Helpers
 */
trait Settings
{
    /**
     * Generates a list of languages based
     * on the configuration data in 'settings.php'
     *
     * @return string
     */
    public function languages(): string
    {
        $lang = [];
        foreach (config('settings.languages') as $_lang) {
            $lang[$_lang] = __('admin.pages.settings.index.select_language.' . $_lang);
        }
        return collect($lang)->toJson();
    }

    /**
     * Gets current locale.
     *
     * @return string
     */
    public function currentLocale(): string
    {
        return collect(
            ['lang' => app()->getLocale()]
        )->toJson();
    }

}
