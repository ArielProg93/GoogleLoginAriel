<?php
  require_once 'vendor/autoload.php';

  $clientID = '218353241295-lmjel18qvtlu6439enihberp65bj26t0.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost:80/logingoogle-master/perfil.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>