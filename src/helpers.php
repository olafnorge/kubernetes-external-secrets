<?php

if (!function_exists('secret')) {
    /**
     * Read value from named secret
     *
     * @param string $name
     * @param string $default
     * @return mixed
     */
    function secret($name, $default = null) {
        return \olafnorge\Secrets\Facades\Secrets::get($name, $default);
    }
}
