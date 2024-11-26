<?php
require_once './vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('582435751305-oh9fh00p4mje024kp7pgc1ck5cvosf0m.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/waiting-main/working/');
$google_client->addScope('email');
$google_client->addScope('profile');