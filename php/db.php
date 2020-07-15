<?php
$servername = "sql12.freesqldatabase.com";
$username ="root";
$password = "RXu44JDvc4";
$db = "sql12355086";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
   // die("Connection failed: " . mysqli_connect_error());
    echo "connection failed";
    
}
