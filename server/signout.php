<?php
session_start();
include 'inc/conf.php';

//Reset OAuth access token
$google_client->revokeToken($_SESSION['access_token']);
//Destroy entire session data.
session_destroy();
//redirect page to Sign in
header('http://regis.roong-aroon.ac.th/');
exit(0);
?>