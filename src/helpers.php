<?php

use Illuminate\Support\Str;

if (!function_exists('secret')) {
    /**
     * Read value from named secret
     *
     * @param string $name
     * @param string $default
     * @return mixed
     */
    function secret($name, $default = null) {
        $path = sprintf('%s/%s', env('SECRETS_BASE_PATH', '/run/secrets'), trim($name));

        if (is_file($path) && is_readable($path)) {
            $content = trim(file_get_contents($path));

            return Str::startsWith($content, 'base64:')
                ? base64_decode(substr($content, 7))
                : $content;
        }

        return env($name, $default);
    }
}
