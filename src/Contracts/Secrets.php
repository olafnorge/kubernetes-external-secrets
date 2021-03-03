<?php
namespace olafnorge\Secrets\Contracts;

interface Secrets {


    /**
     * @param $name
     * @param $default
     * @return mixed
     */
    public function get($name, $default);
}
