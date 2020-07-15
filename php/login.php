<?php
include "db.php";
session_start();

//customer_login
if(isset($_POST["c_login"])){
		$email=mysqli_real_escape_string($con,$_POST["userEmail"]);
		$password=md5($_POST["userPassword"]);
		$sql="SELECT * FROM customer_registration WHERE email='$email' AND password='$password'";
		$run_query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($run_query);
		if($count==1){
			$row=mysqli_fetch_array($run_query);
			$_SESSION["cid"]=$row["customer_id"];
			$_SESSION["ca"]=$row["address"];
			$_SESSION["cemail"]=$row["email"];
			$_SESSION["cname"]=$row["customer_name"];
			echo "true12345";
		}
	}

//restaurant_login
if(isset($_POST["r_login"])){
		$email=mysqli_real_escape_string($con,$_POST["r_userEmail"]);
		$password=md5($_POST["r_userPassword"]);
		$sql="SELECT * FROM restaurant_registration WHERE email='$email' AND password='$password'";
		$run_query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($run_query);
		if($count==1){
			$row=mysqli_fetch_array($run_query);
			$_SESSION["rid"]=$row["restaurant_id"];
			$_SESSION["remail"]=$row["email"];
			$_SESSION["rname"]=$row["restaurant_name"];
			echo "true12345";
		}
	}
?>