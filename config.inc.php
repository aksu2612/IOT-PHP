<?php

$servername = "www.ganahijyen.com";
$username = "ganahijy";
$password = "39KQqra7c3";
$dbname = "ganahijy_gana";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }
 
?>
