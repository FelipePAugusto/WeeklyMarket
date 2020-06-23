<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyBNA7cwS0zX8jCO9LYYj92IdzX04qzveZs',
        'auth_domain' => 'projeto-e9e88.firebaseapp.com',
        'database_url' => 'https://projeto-e9e88.firebaseio.com',
        'secret' => 'xgU7N62h0B83WffBzGLeoaH5356L129ORv9ZdFMI',
        'storage_bucket' => 'projeto-e9e88.appspot.com',
    ],

];
