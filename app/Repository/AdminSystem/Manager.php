<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem;


use App\Repository\AdminSystem\Generator\Generator;

/**
 * Base class for getting menu.
 *
 * @author St Biernacki <stbiernacki@live.com>
 */
class Manager
{
    /**
     * The container for menu.
     *
     * @var array
     */
    protected $menu;

    /**
     * The container for filters.
     *
     * @var array
     */
    protected $filters;

    /**
     * The container for user data.
     *
     * @var array
     */
    protected $data;

    /**
     * Manager constructor.
     *
     * @param array $data
     * @param array $filters
     */
    public function __construct($data = [], $filters = [])
    {
        $this->data = $data;
        $this->filters = $filters;
    }

    /**
     * Gets data to generate a user menu.
     *
     * @return array
     */
    public function getMenu(): array
    {
        if (! $this->menu) {
            $generator = new Generator($this->resolvedFilters());
            call_user_func_array([ $generator, 'pushMenu'], $this->data);
            $this->menu = $generator->generatedMenu;
        }

        return $this->menu;
    }

    /**
     * Resolves the filter instances from the container.
     *
     * @see 'app/Providers/AdminSystemServiceProvider.php'
     *
     * @return array
     */
    protected function resolvedFilters()
    {
        return array_map(function ($filter) {
            return app()->make($filter);
        }, $this->filters);
    }
}
