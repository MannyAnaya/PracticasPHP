<?php

return [

'defaults' => [
    'guard' => 'api',
    'passwords' => 'users',
],


'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'api' => [
        'driver' => 'keycloak',
        'provider' => 'users',
    ],
],

    

];
