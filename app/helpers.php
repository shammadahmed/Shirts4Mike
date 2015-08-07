<?php

/**
 * Echo 'on' if the path is equal to the request.
 * 
 * @param   string $path   The path of the link.
 * @param   string $active The string to echo.
 * @return  bool
 */
function set_active($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}