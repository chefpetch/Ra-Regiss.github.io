<?php
session_start();
include('inc/conf.php');

//////////// Begin Google Auth ///////////////////////////////////////////////////////////////////////////

if(isset($_GET["code"])){

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    if(!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google\Service\Oauth2($google_client);

        $data = $google_service->userinfo->get();

        if(!empty($data['given_name'])){
            $_SESSION['user_fname'] = $data['given_name'];
        }

        if(!empty($data['family_name'])){
            $_SESSION['user_lname'] = $data['family_name'];
        }

        if(!empty($data['email'])){
            $_SESSION['user_email'] = $data['email'];
        }

        if(!empty($data['gender'])){
            $_SESSION['user_gender'] = $data['gender'];
        }

        if(!empty($data['picture'])){
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}



if(!isset($_SESSION['access_token'])){
    //Create a URL to obtain user authorization
    echo '<div class="w3-center"><a href="'.$google_client->createAuthUrl(). '"><img class= "signin" src="img/google-signin-button.svg" width="200" /></a></div>';
}else {
//////////// End Google Auth ///////////////////////////////////////////////////////////////////////////
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regis";
$conn = new mysqli($servername, $username, $password, $dbname);
$st = mysqli_query($conn, "SELECT email FROM student WHERE email = '" . $_SESSION['user_email'] . "'");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($st) {
    if (mysqli_num_rows($st) == 1) {

  } else {
    $email = $_SESSION['user_email'];
    echo "User email: " . $email . "<br>";

    $emailParts = explode('@', $email);
    $domain = $emailParts[1];
    echo "Email domain: " . $domain . "<br>";

    $strpos_result = strpos($domain, 'st');
    echo "strpos result: " . $strpos_result . "<br>";

    if (strpos($email, 'st') !== false) {
        $_SESSION['loggedin'] = true;
        header('Location: newdip.php');
        exit;
    } else {
        // Redirect to teachmain.php if 'st' is not found in the email
        header('Location: teachmain.php');
        $_SESSION['loggedin1'] = true;
        exit;
    }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <img class = "img2" src = "ellipse17.png">
    <img class = "img1" src = "ra.png">
    <img class = "img3" src = "ellipse18.png">
    <img class = "img4" src = "ellipse16.png">
    <link rel="stylesheet" href="style7.css">
</head>
<body>
    <h1>Login</h1>
</html>

