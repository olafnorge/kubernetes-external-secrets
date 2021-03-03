<?php

return [
    'base_path' => env('SECRETS_BASE_PATH', '/run/secrets'),
    'driver' => \olafnorge\Secrets\Drivers\File::class,
];
