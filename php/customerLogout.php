<?php

session_start();

unset($_SESSION["cid"]);

//unset($_SESSION["name"]);

header("location:../index.php");

?>