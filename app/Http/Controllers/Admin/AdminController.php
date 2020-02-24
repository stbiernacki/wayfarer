<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller
{
    /**
     * AdminController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
