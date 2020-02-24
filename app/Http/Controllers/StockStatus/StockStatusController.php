<?php

namespace App\Http\Controllers\StockStatus;

use App\Http\Controllers\Admin\AdminController;
use App\Models\StockStatus;
use Illuminate\Http\Response;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class StockStatusController
 * @package App\Http\Controllers\StockStatus
 */
class StockStatusController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return  view('admin.pages.stockStatus.index');
    }

    /**
     * Get stock status data for tables (via jQuery DataTables).
     *
     * @return mixed
     * @throws \Exception
     */
    public function datatable()
    {
        return Datatables::of(StockStatus::query())->make(true);
    }
}
