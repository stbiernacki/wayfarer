<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem\ViewComposers;


use App\Repository\AdminSystem\Manager;
use Illuminate\View\View;

/**
 * View Composer.
 *
 * @author St Biernacki <stbiernacki@live.com>
 */
class ManagerComposer
{
    /**
     * The Manager class instance.
     *
     * @var Manager
     */
    private $manager;

    /**
     * ManagerComposer constructor.
     *
     * @param Manager $manager
     */
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Binds data.
     *
     * @see 'app/Providers/AdminSystemServiceProvider.php'
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('manager', $this->manager);
    }

    /**
     * Binds data.
     *
     * @see 'app/Providers/AdminSystemServiceProvider.php'
     *
     * @param View $view
     */
    public function create(View $view)
    {
        $view->with('manager', $this->manager);
    }
}
