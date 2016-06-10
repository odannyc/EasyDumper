<?php

if (!function_exists('d')) {
    function d($mixed, $prefix = 'DEBUG', $public = false) {
        $prefix = stringEndsWith($prefix, ': ', true, true).': ';
        $stack = debug_backtrace();

        $backtrace = 'Line '.$stack[0]['line'].' in '.$stack[0]['file']."\n";

        if (defined('PATH_ROOT')) {
            $backtrace = str_replace(PATH_ROOT, '', $backtrace);
        }

        echo '<pre style="text-align: left; padding: 0 4px;">'.$backtrace.$prefix;

        if (is_string($mixed)) {
            echo $mixed;
        } else {
            echo htmlspecialchars(safePrint($mixed, true));
        }

        echo '</pre>';
    }
}
