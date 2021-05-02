<?php


if ( !function_exists('is_active')) {
    function is_active ($name) {

        $current = Request::segment('1') . "/" . Request::segment('2');

        $route = route($name);
        if (\URL::current() == $route || ($current != "/" && strpos($route, $current))) {
            return 'active';
        }
        return '';
    }
}
