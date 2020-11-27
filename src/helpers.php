<?php

if (! function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param  string $path
     * @return string
     *
     * @copyright Taylor Otwell
     * @link      https://github.com/laravel/framework/blob/8.x/src/Illuminate/Foundation/helpers.php
     */
    function public_path($path = '')
    {
        return Roots\public_path($path);
    }
}

if (! function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param  string|null $abstract
     * @param  array       $parameters
     * @return mixed|Application
     *
     * @copyright Taylor Otwell
     * @link      https://github.com/laravel/framework/blob/8.x/src/Illuminate/Foundation/helpers.php
     */
    function app(?string $abstract = null, array $parameters = [])
    {
        return Roots\app($abstract, $parameters);
    }
}
