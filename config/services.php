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
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],
	'github' => [
		'client_id' => '094d634a50f81d02a408',
		'client_secret' => 'cc1a171cc1b350365f8b725750f4c5339f736502',
		'redirect' => 'http://ithub.zp.ua/socialite/socialite/callback',
	],
	'facebook' => [
	    'client_id' => '290334661301271',
	    'client_secret' => '0e507de908ee1a70e6d7fde23acfce47',
	    'redirect' => 'http://ithub.zp.ua/socialite/facebook/callback',
	],

];
