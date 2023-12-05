<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$dbInfo = "mysql:host=localhost;dbname=aceguud";
$dbUser = "root";
$dbPassword = "";
$page = include_once('view/data-analyst-portfolio.php');
echo $page;


?>