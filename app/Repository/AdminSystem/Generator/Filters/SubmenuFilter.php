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
 * Class SubmenuFilter
 *
 * @package App\Repository\AdminSystem\Generator\Filters
 * @author St Biernacki <stbiernacki@live.com>
 */
class SubmenuFilter implements Filter
{
    /**
     * App\Repository\AdminSystem\Generator\Common\ActivityAnalyzer
     *
     * @var ActivityAnalyzer
     */
    private $activityAnalyzer;

    /**
     * SubmenuFilter constructor.
     *
     * @param ActivityAnalyzer $activityAnalyzer
     */
    public function __construct(ActivityAnalyzer $activityAnalyzer)
    {
        $this->activityAnalyzer = $activityAnalyzer;
    }

    /**
     * Data converting 'attached class(es)' type for sub menu.
     *
     * @param array $entry
     * @param Generator $generator
     * @return array
     */
    public function convert(array $entry, Generator $generator): array
    {
        if (isset($entry['submenu'])) {
            $entry['submenu'] = $generator->convertEntries($entry['submenu']);
            $entry['submenu_open'] = $this->activityAnalyzer->isActive($entry);
            $entry['submenu_classes'] = $this->generateSubmenuClasses($entry);
            $entry['submenu_class'] = implode(' ', $entry['submenu_classes']);
        }

        return $entry;
    }

    /**
     * Sets appropriate classes for the class attribute on the menu.
     *
     * @param $entry
     * @return array
     */
    protected function generateSubmenuClasses($entry)
    {
        $classes = ['has-treeview'];

        if ($entry['submenu_open']) {
            $classes[] = 'menu-open';
        }

        return $classes;
    }
}
