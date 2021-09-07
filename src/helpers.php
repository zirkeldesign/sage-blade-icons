<?php

if (!function_exists('public_path')) {
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

if (!function_exists('app')) {
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

if (!function_exists('resource_path')) {
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     *
     * @copyright Taylor Otwell
     * @link https://github.com/laravel/framework/blob/8.x/src/Illuminate/Foundation/helpers.php
     */
    function resource_path($path = '')
    {
        return Roots\resource_path($path);
    }
}

if (!function_exists('config')) {
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string|null  $key
     * @param  mixed  $default
     * @return mixed|Repository
     *
     * @copyright Taylor Otwell
     * @link https://github.com/laravel/framework/blob/8.x/src/Illuminate/Foundation/helpers.php
     */
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('config');
        }

        if (is_array($key)) {
            return app('config')->set($key);
        }

        return app('config')->get($key, $default);
    }
}