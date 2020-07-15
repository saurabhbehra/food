<?php
$servername = "http://www.phpmyadmin.co/db_structure.php?server=1&db=sql12355086";
$username ="sql12355086";
$password = "RXu44JDvc4";
$db = "sql12355086";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
   // die("Connection failed: " . mysqli_connect_error());
    echo "connection failed";
    
}
