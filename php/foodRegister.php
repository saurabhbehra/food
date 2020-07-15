<?php
session_start(); 
include "db.php";
 

//REGISTRATION FOR CUSTOMER
    
    $r_id=$_SESSION["rid"];
    $f_name=$_POST["f_name"];
    $f_price=$_POST["f_price"];
    $f_foodType=$_POST["f_type"];

    if(empty($f_name)||empty($f_price))
    {
        echo "All fields are required";
    } 
    else 
    {
         $f_sql="INSERT INTO `product` (`food_id`, `restaurant_id`, `food_name`, `food_cost`, `food_type`) VALUES (NULL, '$r_id', '$f_name', '$f_price', '$f_foodType');";
         $f_result=mysqli_query($con,$f_sql);

        if($f_result)
        {
            echo "Successfully Food Has been uploaded";
        }
    }

?>