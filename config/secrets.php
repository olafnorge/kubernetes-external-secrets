<?php

return [
    'base_path' => env('SECRETS_BASE_PATH', '/run/secrets'),
    'concrete' => \olafnorge\Secrets\Concretes\File::class,
];
