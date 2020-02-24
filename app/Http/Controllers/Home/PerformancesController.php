<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Performance;

/**
 * Class PerformancesController
 * @package App\Http\Controllers\Home
 */
class PerformancesController extends AdminController
{

    /**
     * Gets current year revenue per month.
     *
     * @return mixed
     */
    public function getThisYear()
    {
        return Performance::thisYear()
            ->selectRaw('strftime("%m", created_at) as month, sum(revenue) as revenue')
            ->groupBy('month')
            ->pluck('revenue', 'month');
    }

    /**
     * Gets revenue backwards from the current date per day.
     *
     * @return mixed
     */
    public function getSpanningDays()
    {
        $range = request('range', 30);
        return Performance::spanningDays($range)
            ->pluck('revenue', 'created_at');
    }
}
