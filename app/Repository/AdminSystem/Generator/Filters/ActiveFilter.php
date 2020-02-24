<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem\Generator\Filters;


use App\Repository\AdminSystem\Generator\Common\ActivityAnalyzer;
use App\Repository\AdminSystem\Generator\Contracts\Filter;
use App\Repository\AdminSystem\Generator\Generator;

/**
 * Class ActiveFilter
 *
 * @package App\Repository\AdminSystem\Generator\Filters
 * @author St Biernacki <stbiernacki@live.com>
 */
class ActiveFilter implements Filter
{
    /**
     * App\Repository\AdminSystem\Generator\Common\ActivityAnalyzer
     *
     * @var ActivityAnalyzer
     */
    private $activityAnalyzer;

    /**
     * ActiveFilter constructor.
     *
     * @param ActivityAnalyzer $activityAnalyzer
     */
    public function __construct(ActivityAnalyzer $activityAnalyzer)
    {
        $this->activityAnalyzer = $activityAnalyzer;
    }

    /**
     * Data converting 'is active' type
     *
     * @param array $entry
     * @param Generator $generator
     * @return array
     */
    public function convert(array $entry, Generator $generator): array
    {
        if (! isset($entry['header'])) {
            $entry['active'] = $this->activityAnalyzer->isActive($entry);
        }

        return $entry;
    }
}
