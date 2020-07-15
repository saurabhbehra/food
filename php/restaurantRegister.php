<?php
include "db.php";
//REGISTRATION FOR RESTAURANT

    $name=$_POST["r_name"];
    $email=$_POST["r_email"];
    $password=md5($_POST["r_pass"]);

    if(empty($name)||empty($email)||empty($password))
		{
			echo "All fields are required";
        } 
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
             echo  "Invalid email format";
        }

    else 
        {
            $sql="INSERT INTO `restaurant_registration` (`restaurant_id`, `restaurant_name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password');";
            $result=mysqli_query($con,$sql);
            if($result)
            {
            echo " YOU ARE REGISTERED SUCCESSFULLY";
            }
        }
                
?>