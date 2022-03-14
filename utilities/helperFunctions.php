<?php

function isLoggedIn()
{
    if(isset($_SESSION) && isset($_SESSION['logged_in'])){
        return $_SESSION['logged_in'];
    }
    return false;
}

function isRequestMethodGet()
{
    if($_SERVER["REQUEST_METHOD"] == "GET")
        return true;
    return false;
}

function isRequestMethodPost()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
        return true;
    return false;
}