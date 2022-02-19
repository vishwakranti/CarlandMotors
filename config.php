<?php
// set to NZ time zone
date_default_timezone_set('Pacific/Auckland');
// start session
session_start();

// $server = "localhost"; // here the database server is localhost. Variables created for easy changing
// $user = "root";
// $password = "";
// $database = "carland_motors";
// $link = mysqli_connect($server, $user, $password, $database);

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'carland_motors');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// we save the new image here
define('PRODUCT_IMG_DIR', 'c:/xampp/htdocs/carlandmotors_vishwakranti/images/');

// width is scale on the fly
//define('THUMBNAIL_WIDTH', 500);

