<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem\Generator\Filters;


use App\Repository\AdminSystem\Generator\Contracts\Filter;
use App\Repository\AdminSystem\Generator\Generator;

/**
 * Class ClassesFilter
 *
 * @package App\Repository\AdminSystem\Generator\Filters
 * @author St Biernacki <stbiernacki@live.com>
 */
class ClassesFilter implements Filter
{

    /**
     * Data converting 'attached class(es)' type for main menu.
     *
     * @param array $entry
     * @param Generator $generator
     * @return array
     */
    public function convert(Array $entry, Generator $generator): array
    {
        if (! isset($entry['header'])) {
            $entry['classes'] = $this->generateClasses($entry);
            $entry['class'] = implode(' ', $entry['classes']);
            $entry['top_nav_classes'] = $this->generateClasses($entry, true);
            $entry['top_nav_class'] = implode(' ', $entry['top_nav_classes']);
        }

        return $entry;
    }

    /**
     * Sets appropriate classes for the class attribute on the menu.
     *
     * @param $entry
     * @param bool $topNav
     * @return array
     */
    protected function generateClasses($entry, $topNav = false)
    {
        $classes = [];

        if ($entry['active']) {
            $classes[] = 'active';
        }

        if (isset($entry['submenu'])) {
            if ($topNav) {
                $classes[] = 'dropdown';
            } else {
                $classes[] = 'nav-item';
            }
        }

        return $classes;
    }
}
