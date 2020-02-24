<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Contracts\Support\Renderable;

/**
 * Class HomeController
 * @package App\Http\Controllers\Home
 */
class HomeController extends AdminController
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('admin.pages.home.index');
    }
}
