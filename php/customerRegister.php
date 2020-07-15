<?php
include "db.php";
   

//REGISTRATION FOR CUSTOMER

    $c_name=$_POST["customerName"];
    $c_email=$_POST["email"];
    $c_password=md5($_POST["password"]);
    $c_address=$_POST["address"];
    $c_foodType=$_POST["foodType"];

    if(empty($c_name)||empty($c_email)||empty($c_password)||empty($c_address))
		{
			echo "All fields are required";
        } 
    else if(!filter_var($c_email, FILTER_VALIDATE_EMAIL))
        {
             echo  "Invalid email format";
        }
        
    else{
            $c_sql="INSERT INTO `customer_registration` (`customer_id`, `customer_name`, `email`, `password`, `address`, `foodType`) VALUES (NULL, '$c_name', '$c_email', '$c_password', '$c_address', '$c_foodType')";
            $c_result=mysqli_query($con,$c_sql);

            if($c_result)
            {
            echo " YOU ARE REGISTERED SUCCESSFULLY";
            }
        }
    
?>