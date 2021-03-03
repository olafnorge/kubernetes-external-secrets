<?php

namespace olafnorge\Secrets\Drivers;

use Illuminate\Support\Env;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use olafnorge\Secrets\Contracts\Secrets;

class File implements Secrets {


    /**
     * @param $name
     * @param $default
     * @return mixed
     */
    public function get($name, $default) {
        $path = sprintf('%s/%s', Config::get('secrets.base_path', '/run/secrets'), trim($name));

        if (is_file($path) && is_readable($path)) {
            $content = trim(file_get_contents($path));

            return Str::startsWith($content, 'base64:')
                ? base64_decode(substr($content, 7))
                : $content;
        }

        return Env::get($name, $default);
    }
}
