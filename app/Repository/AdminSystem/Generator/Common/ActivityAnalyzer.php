<?php

/*
 * This file is part of the AdminSystem package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository\AdminSystem\Generator\Common;


use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * The base analyzer class for the active menu.
 *
 * @author St Biernacki <stbiernacki@live.com>
 */
class ActivityAnalyzer
{
    /**
     * Illuminate\Http\Request
     *
     * @var Request
     */
    private $request;

    /**
     * Illuminate\Contracts\Routing\UrlGenerator;
     *
     * @var UrlGenerator
     */
    private $url;

    /**
     * ActivityAnalyzer constructor.
     *
     * @param Request $request
     * @param UrlGenerator $url
     */
    public function __construct(Request $request, UrlGenerator $url)
    {
        $this->request = $request;
        $this->url = $url;
    }

    /**
     * Establishes active bookmark.
     *
     * @param $entry
     * @return bool
     */
    public function isActive($entry): bool
    {
        if (isset($entry['submenu'])) {
            return $this->hasActive($entry['submenu']);
        }

        if (isset($entry['active'])) {
            return $this->disclosedActive($entry['active']);
        }

        if (isset($entry['href']) || isset($entry['url'])) {
            return $this->matchPattern($entry['href']);
        }

        return false;
    }

    /**
     * Matches the current url.
     *
     * @param $pattern
     * @return bool
     */
    private function matchPattern($pattern): bool
    {
        $fullUrlPattern = $this->url->to($pattern);

        $fullUrl = $this->request->fullUrl();

        if (mb_substr($pattern, 0, 6) === 'regex:') {
            $regex = mb_substr($pattern, 6);

            if (preg_match($regex, $this->request->path()) == 1) {
                return true;
            }

            return false;
        }

        return Str::is($fullUrlPattern, $fullUrl);
    }

    /**
     * Chooses active bookmark
     *
     * @param $entries
     * @return bool
     */
    private function hasActive($entries): bool
    {
        foreach ($entries as $entry) {
            if ($this->isActive($entry)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Discloses active bookmark.
     * @param $active
     * @return bool
     */
    private function disclosedActive($active): bool
    {
        if (! is_array($active)) {
            return $active;
        }

        foreach ($active as $url) {
            if ($this->matchPattern($url)) {
                return true;
            }
        }

        return false;
    }
}
