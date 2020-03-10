<?php
// get path from request url
if (strpos($_SERVER['REQUEST_URI'], '?') !== false){
    $uri = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?'));
} else {
    $uri = $_SERVER['REQUEST_URI'];
}

function checkArrayContains($urlArr, $url)
{
    return in_array($url, $urlArr) ? true : false;
}