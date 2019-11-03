<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '347073698675-u57sno0u038bk948hjcjc3lbcjel0rf9.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'HTwkZ2K9phBSXCUzSGbvU6Fv'; //Google client secret
$redirectURL = 'http://localhost/Home.html'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>