<?php

// Google API configuration
define('GOOGLE_CLIENT_ID', '154182362767-r9cu44aa811ijnl47rnqts63o2ktl59e.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'https://sharksjob.com/candidate_profile');

//Include Google Client Library for PHP autoload file
//require_once 'vendor/autoload.php';
include_once APPPATH . "libraries/google-api-php-client-master/src/Google/autoload.php";
//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId(GOOGLE_CLIENT_ID);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_client->addScope('email');
$google_client->addScope('profile');

//start session on web page
//session_start();
?>