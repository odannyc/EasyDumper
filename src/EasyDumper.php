<?php

if (!function_exists('d')) {
    function d($mixed)
    {
        $stack = debug_backtrace();

        $backtrace = 'Line '.$stack[0]['line'].' in '.$stack[0]['file']."\n";

        if (defined('PATH_ROOT')) {
            $backtrace = str_replace(PATH_ROOT, '', $backtrace);
        }

        echo '<pre style="text-align: left; padding: 0 4px;">'.$backtrace;

        print_r($mixed);

        echo '</pre>';

        die();
    }
}
