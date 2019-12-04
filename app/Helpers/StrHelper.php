<?php

use Illuminate\Support\Carbon;

if (!function_exists('cleanRouteUrl')) {
    /**
     * Clean the url for the front end to display.
     *
     * @param string $link
     *
     * @return echo string
     */
    function cleanRouteUrl($link)
    {
        $parsedUrl = parse_url($link);
        $routeUrl = '';
        if (isset($parsedUrl['path'])) {
            $routeUrl .= $parsedUrl['path'];
        }
        if (isset($parsedUrl['query'])) {
            $routeUrl .= '?'.$parsedUrl['query'];
        }
        echo $routeUrl;
    }
}

if (!function_exists('lastName')) {
    function lastName($name)
    {
        $splitName = explode(' ', $name);
        $lastNameIndex = (count($splitName)-1);
        return !empty($splitName[$lastNameIndex]) ? $splitName[$lastNameIndex] : '';
    }
}

if (! function_exists('lastLoggedin')) {
    function lastLoggedin($date)
    {
        $diff = $date->diffForHumans();
        return str_replace(
            ["hour", "hours", "minute", "minutes", "seconds", "seconds", "ago"],
            ["Jam", "Jam", "Menit", "Menit", "Detik", "Detik", "lalu"],
            $diff
        );
    }
}


if (! function_exists('currentGreting')) {
    function currentGreting()
    {
        $hour = Carbon::now()->format('H');
        if ($hour < 11) return 'Selamat Pagi';
        if ($hour < 13) return 'Selamat Siang';
        if ($hour < 17) return 'Selamat Sore';
        return 'Selamat Malam';
    }
}