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


if ( !function_exists('upload_file')) {
    function upload_file ($name) {

        $file = request()->{$name};
        $path = substr(encrypt(time()), 0, 32) . '.' . $file->getClientOriginalExtension();

        $file->move('images', $path);
        return $path;

    }
}
