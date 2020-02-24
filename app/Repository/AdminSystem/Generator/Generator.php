<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem\Generator;


/**
 * The base class for generate menu.
 *
 * @author St Biernacki <stbiernacki@live.com>
 */
class Generator
{
    /**
     * The container for the generated menu.
     *
     * @var array
     */
    public $generatedMenu = [];

    /**
     * The container for all the filters.
     *
     * @var array
     */
    private $filters;

    /**
     * Generator constructor.
     *
     * @param array $filters
     */
    public function __construct(array $filters = [])
    {
        $this->filters = $filters;
    }

    /**
     * Builds the menu.
     */
    public function pushMenu(): void
    {
        $entries = $this->convertEntries(func_get_args());

        foreach ($entries as $entry) {
            array_push($this->generatedMenu, $entry);
        }
    }

    /**
     * Converts and arranges the menu according to the user.
     *
     * @param $entries
     * @return array
     */
    public function convertEntries($entries): array
    {
        return array_filter(array_map(function ($entry) {
            foreach ($this->filters as $filter) {
                $entry = $filter->convert($entry, $this);
            }
            return $entry;
        }, $entries));
    }
}
