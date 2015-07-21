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
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],
    
    /**
      * Socialite Oauth Provider configuration
      */
      
    'github' => array(
	'client_id' => env('GITHUB_OAUTH_CLIENT_ID', NULL),
	'client_secret' => env('GITHUB_OAUTH_CLIENT_SECRET', NULL),
	'redirect' => env('GITHUB_OAUTH_REDIRECT_URL', NULL),	
    ),

];
