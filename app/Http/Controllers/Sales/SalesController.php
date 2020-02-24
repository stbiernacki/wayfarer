<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Response;

/**
 * Class SalesController
 * @package App\Http\Controllers\Sales
 */
class SalesController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.pages.sales.index');
    }
}
