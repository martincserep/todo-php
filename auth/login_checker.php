<?php
// get path from request url
if (strpos($_SERVER['REQUEST_URI'], '?') !== false){
    $uri = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?'));
} else {
    $uri = $_SERVER['REQUEST_URI'];
}

$userPages = array("{$context_path}admin/index.php",
    "{$context_path}admin/users/read_users.php",
    "{$context_path}auth/login.php");


if (isset($_SESSION[])) {
    if ($_SESSION['access_level'] == "User") {

        if (checkArrayContains($customerPages, $uri)) {
            return;
        }

    } else if ($_SESSION['access_level'] == "Admin") {
        if (checkArrayContains($adminPages, $uri)) {
            return;
        }
    } else {
        die("Unknown access level: {$_SESSION['access_level']}");
    }
}  else {
    header("Location: {$home_url}auth/login.php?action=incorrect");
}

function checkArrayContains($urlArr, $url)
{
    return in_array($url, $urlArr) ? true : false;
}