<?php
session_start();
require_once("./login/vendor/autoload.php");

$client = new Google_Client();
$client->setAuthConfig('client_secret_171496176145-3gk9od2tqkfgjch4a2k1i790imr8kqo6.apps.googleusercontent.com.json'); /* REPLACE WITH YOUR CREDENTIALS.json FILE NAME FROM GOOGLE */

unset($_SESSION['upload_token']);
$client->revokeToken();
session_destroy();

header("Location:index.php");