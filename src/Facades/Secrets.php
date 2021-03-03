<?php

namespace olafnorge\Secrets\Facades;

use Illuminate\Support\Facades\Facade;
use olafnorge\Secrets\Contracts\Secrets as SecretsInterface;

/**
 * Class Secrets
 *
 * @package olafnorge\Secrets\Facades
 * @method mixed get($name, $default)
 */
class Secrets extends Facade {


    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return SecretsInterface::class;
    }
}
