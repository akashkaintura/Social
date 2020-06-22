<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'key'       => env('STRIPE_KEY'),
        'secret'    => env('STRIPE_SECRET')
    ],

    'github' => [
        'client_id' => '829a143053926ccb797c',
        'client_secret' => '72347843aba81b09e68de293a3bf031c74a64706',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],

    'facebook' => [
        'client_id'     => env('FB_ID'),
        'client_secret' => env('FB_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/facebook/callback',
    ],

    'twitter' => [
        'client_id'     => env('TW_ID'),
        'client_secret' => env('TW_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/twitter/callback',
    ],

    'google' => [
        'client_id'     => '221407986787-nbt9logjour7bs0gn857gpak168l9n6d.apps.googleusercontent.com',
        'client_secret' => 'dau1qPEHQ-2CHKtxPwmxTKKR',
        'redirect'      => 'http://localhost:8000/oauth/google/callback',
    ],



];
