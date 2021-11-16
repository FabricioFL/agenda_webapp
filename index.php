<?php

session_start();

$url = $_SERVER['REQUEST_URI'];
$url = strip_tags($url);
$url = strtolower($url);

if($url == "/" or $url == "home" or $url == "inicio")
{
    header('Location: View/index.php');
    die();
}else
{
    header('Location: View/notfound.php');
    die();
}