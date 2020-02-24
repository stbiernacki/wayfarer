<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Performance
 * @package App\Models
 */
class Performance extends Model
{
    /**
     * Gets current year revenue.
     *
     * @param $query
     * @return mixed
     */
    public function scopeThisYear($query)
    {
        return $query->where('created_at', '>=', Carbon::now()->firstOfYear());
    }

    /**
     * Gets revenue backwards from the current date.
     *
     * @param $query
     * @param $days
     * @return mixed
     */
    public function scopeSpanningDays($query, $days)
    {
        return $query->oldest()->whereDate(
            'created_at', '>=', Carbon::now()->subDays($days)
        );
    }
}
