<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem\Generator\Contracts;


use App\Repository\AdminSystem\Generator\Generator;

/**
 * Contract for all filter types.
 *
 * @author St Biernacki <stbiernacki@live.com>
 */
interface Filter
{
    /**
     * Data converting.
     *
     * @param array $entry
     * @param Generator $generator
     * @return array
     */
    public function convert(array $entry, Generator $generator): array ;
}
