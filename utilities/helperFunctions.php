<?php

function isLoggedIn()
{
    if(isset($_SESSION) && isset($_SESSION['logged_in'])){
        return $_SESSION['logged_in'];
    }
    return false;
}

function getUserId()
{
    if(isset($_SESSION) && isset($_SESSION['user_id']))
        return  $_SESSION['user_id']; 

    return NULL;
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

function setupUserSession(string $id, string $userEmail)
{
    $_SESSION["logged_in"] = true;
	$_SESSION["user_id"] = $id;
	$_SESSION["user_email"] = $userEmail;

}