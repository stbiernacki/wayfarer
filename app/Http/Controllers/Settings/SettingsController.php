<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Setting;
use App\Repository\Helpers\Settings;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

/**
 * Class SettingsController
 * @package App\Http\Controllers\Settings
 */
class SettingsController extends AdminController
{
    use Settings;

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.pages.settings.index', [
            'locale' => $this->currentLocale(),
            'languages' => $this->languages()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse|Redirector
     */
    public function store()
    {
        if (empty(request('locale'))) {
            return $this->redirectIndex();
        }
        $locale = Setting::where('key', 'locale')->first();
        if ($locale) {
            $locale->value = request('locale');
            $locale->save();
        }
        return $this->redirectIndex();
    }

    /**
     * @return RedirectResponse|Redirector
     */
    private function redirectIndex()
    {
        return redirect(route('admin.settings.index'));
    }
}
