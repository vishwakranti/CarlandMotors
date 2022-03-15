<?php
require_once './utilities/helperFunctions.php';
include "config.php";

// check if the member is logged in
if (!isLoggedIn()) 
{
    header("Location: login.php");
} 
else 
{   // get car id from URL
    $car_id = $_GET["car_id"];
    $action = $_GET['action'];
    $user_id = $_SESSION['user_id'];
    $return_url = isset($_GET['returnUrl']) ? $_GET['returnUrl'] : NULL;

    $sql = "";
    if($action == 'add')
    {
        $sql = "INSERT INTO wishlist (car_id, user_id) VALUES (?,?)";
    }
    else
    {
        $sql = "DELETE FROM wishlist WHERE car_id = ? and user_id = ?";
    }

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $car_id, $user_id);

        $stmt->execute();

    if($return_url && $return_url == "wishlist")
    {
        // redirect to wishlist.php
        header("Location: wishlist.php");
        exit;
    }

    // redirect to index.php
    header("Location: index.php");
    exit;
} // end of if
