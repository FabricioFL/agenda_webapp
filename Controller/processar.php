<?php

session_start();

if(isset($_POST['entrada']))
{
    $entrada = strip_tags($_POST['entrada']);
    if(!isset($_SESSION['tasks']))
    {
        $_SESSION['tasks'] = array();
        $_SESSION['tasks'][] = $entrada;
    }else
    {
        $_SESSION['tasks'][] = $entrada;
    }
}