<?php

$server     = "localhost";
$username   = "admin";
$password   = "admin";
$db         = "techsup";

// Create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// Check connection
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
}

?>