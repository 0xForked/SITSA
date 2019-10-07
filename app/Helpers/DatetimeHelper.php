<?php

if (! function_exists('logged_in')) {
    function logged_in($date)
    {
        $diff = $date->diffForHumans();
        return str_replace(["hours", "minutes"], ["hrs", "mins"], $diff);
    }
}
