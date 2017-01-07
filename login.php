<?php 
require_once 'vendor/autoload.php';

// Start user session reqd for storing state
session_start(); 

// Your App Configs
$provider = new TheNetworg\OAuth2\Client\Provider\Azure([
    'clientId'          => 'Register your app at apps.dev.microsoft.com',
    'clientSecret'      => 'Register your app at apps.dev.microsoft.com',
    'redirectUri'       => 'http://localhost:8000/login.php'
]);

// Just do basic read of /me endpoint 
$provider->scope = ['offline_access User.Read'];
$provider->urlAPI = "https://graph.microsoft.com/v1.0/";

// This tells the library not to pass resource reqd for v2.0
$provider->authWithResource = false;

// Obtain the auth code
if (!isset($_GET['code'])) {
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: '.$authUrl);
    exit;

// State validation 
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    unset($_SESSION['oauth2state']);
    exit("State mismatch, ending auth");

} else {
    // Exchange auth code for tokens
    // Token will be in '$token->getToken();'
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code'],
        'resource' => 'https://graph.microsoft.com',
    ]);
    
    // Now we can call /me endpoint of MS Graph 
    try {
        $me = $provider->get("me", $token);

        // To get individual claims, you can do '$me['givenName']'
        $values = '<pre>' . print_r($me, true) . '</pre>';
        exit($values);

    } catch (Exception $e) {
        exit('Failed to call the me endpoint of MS Graph.');
    }
}
