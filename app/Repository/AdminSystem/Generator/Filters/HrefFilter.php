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
use Illuminate\Contracts\Routing\UrlGenerator;

/**
 * Class HrefFilter
 *
 * @package App\Repository\AdminSystem\Generator\Filters
 * @author St Biernacki <stbiernacki@live.com>
 */
class HrefFilter implements Filter
{
    /**
     * Illuminate\Contracts\Routing\UrlGenerator
     *
     * @var UrlGenerator
     */
    protected $urlGenerator;

    /**
     * HrefFilter constructor.
     *
     * @param UrlGenerator $urlGenerator
     */
    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Data converting 'value of href attribute' type for menu.
     *
     * @param array $entry
     * @param Generator $generator
     * @return array
     */
    public function convert(array $entry, Generator $generator): array
    {
        if (! isset($entry['header'])) {
            $entry['href'] = $this->generateHref($entry);
        }

        if (isset($entry['submenu'])) {
            $entry['submenu'] = array_map(function ($subEntry) use ($generator) {
                return $this->convert($subEntry, $generator);
            }, $entry['submenu']);
        }

        return $entry;
    }

    /**
     * Generates a link for the 'href' attribute.
     *
     * @param $entry
     * @return string
     */
    protected function generateHref($entry)
    {
        if (isset($entry['url'])) {
            return $this->urlGenerator->to($entry['url']);
        }

        if (isset($entry['route'])) {
            if (is_array($entry['route'])) {
                return $this->urlGenerator->route($entry['route'][0], $entry['route'][1]);
            }

            return $this->urlGenerator->route($entry['route']);
        }

        return '#';
    }
}
