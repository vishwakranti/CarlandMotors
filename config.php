<?php
// set to NZ time zone
date_default_timezone_set('Pacific/Auckland');
// start session
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

/* Database credentials.  */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'carland_motors');
define('ROOT_DIR', __DIR__);
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// we save the new image here
define('PRODUCT_IMG_DIR', 'c:/xampp/htdocs/carlandmotors_vishwakranti/images/');

// width is scale on the fly
//define('THUMBNAIL_WIDTH', 500);

//upload directory
define('IMAGE_UPLOAD_PATH', 'images/');

