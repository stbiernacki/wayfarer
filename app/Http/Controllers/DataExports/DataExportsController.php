<?php

namespace App\Http\Controllers\DataExports;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Response;

/**
 * Class DataExportsController
 * @package App\Http\Controllers\DataExports
 */
class DataExportsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.pages.dataExports.index');
    }
}
