<?php
include "php/db.php";
session_start();

//fetching restaurant data
if(isset($_POST["product"])){

        $r_id=$_SESSION["rid"];
		$product_query="SELECT * FROM product WHERE restaurant_id='$r_id'";
        $pro_result=mysqli_query($con,$product_query);
		if(mysqli_num_rows($pro_result)>0)
		{
            echo "<div class='row'>";
			while($row=mysqli_fetch_array($pro_result))
			{
				$fid=$row["food_id"];
                $f_name=$row["food_name"];
                $f_cost=$row["food_cost"];
                $f_type=$row["food_type"];
                echo "
                    <div class='col-sm-3 col-12'>
                        <div class='card m-5' style='width: 16rem;'>
                            <div class='card-body'>
                                <h5 class='card-title'>$f_name</h5>
                                <p class='card-text'>Rs. $f_cost</p>
                                <p class='card-text'>$f_type</p>
                            </div>
                        </div>
                     </div>";
            }
            echo "</div>";
        } 
        else
        {
            echo "<h2 class='text-center text-muted mt-5'>Please Upload Food to Continue</h2>";
        }
    }

//fetching all food  product
if(isset($_POST["c_product"]))
{
    
    $sql="SELECT *FROM product";
    $result=mysqli_query($con,$sql);
    echo "<div class='row my-4'>";
    while($row=mysqli_fetch_array($result))
	{
        $fid=$row["food_id"];
		$r_id=$row["restaurant_id"];
		$f_name=$row["food_name"];
		$f_price=$row["food_cost"];
        $f_type=$row["food_type"];
        
        echo "
        <div class='col-sm-4'>
            <div class='card' style='width: 14rem;'>
                <div class='card-body'>
                    <h5 class='card-title'>$f_name</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>Rs. $f_price</h6>
                    <h6 class='card-subtitle mb-2 text-muted'> $f_type</h6>
                    <button type='button' class='btn btn-sm btn-outline-primary float-right' id='order_btn' f_id='$fid' re_id='$r_id'>Order</button>
                </div>
            </div>
        </div>";
    }
    echo "</div>";
}

//fetching restaurant name
if(isset($_POST["rest"])){
    $rest_query="SELECT * FROM restaurant_registration";
    $rest_result=mysqli_query($con,$rest_query);
    echo "<a class='nav-link active' id='v-pills-home-tab' data-toggle='pill' href='#v-pills-home' role='tab'
    aria-controls='v-pills-home' aria-selected='true'> Restaurant Name</a>";

    if(mysqli_num_rows($rest_result)>0)
    {
        while($row=mysqli_fetch_array($rest_result))
        {
            $id=$row["restaurant_id"];
            $r_name=$row["restaurant_name"];
           
            echo "<a class='nav-link rest_name' rid='$id' href='#v-pills-home'>$r_name</a>";
        }
       
    }
}


//fetching food with specific restaurant
if(isset($_POST["get_selected_restaurant"]))
{
    $rid=$_POST["rest_id"];
    $sql="SELECT *FROM product WHERE restaurant_id='$rid'";
    
    $result=mysqli_query($con,$sql);
    echo "<div class='row'>";
    while($row=mysqli_fetch_array($result))
	{
        $fid=$row["food_id"];
		$r_id=$row["restaurant_id"];
		$f_name=$row["food_name"];
		$f_price=$row["food_cost"];
        $f_type=$row["food_type"];
        
        echo "
        <div class='col-sm-4'>
            <div class='card card_specific' style='width: 14rem;'>
                <div class='card-body'>
                    <h5 class='card-title'>$f_name</h5>
                    <h6 class='card-subtitle mb-2 text-muted'> Rs. $f_price</h6>
                    <h6 class='card-subtitle mb-2 text-muted'>$f_type</h6>
                    <button type='button' class='btn btn-sm btn-outline-primary float-right' id='order_btn' f_id='$fid' re_id='$r_id'>Order</button>
                </div>
            </div>
        </div>";
    }
    echo "</div>";
}

//inserting order details to order table
if(isset($_POST["addToOrder"])){

    if(isset($_SESSION["cid"])){

        $p_id=$_POST["proid"];
        $restaurant_id=$_POST["restid"];
        $sql="SELECT * FROM product WHERE food_id='$p_id'";

        $run_query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($run_query);
     
       
        $c_address=$_SESSION["ca"];
        $customer_name=$_SESSION["cname"];
        $f_name=$row["food_name"];
        $f_cost=$row["food_cost"];
       
        
        $sql="INSERT INTO `customer_order` (`order_id`, `restaurant_id`, `c_name`, `f_name`, `cost`, `address`) VALUES (NULL, '$restaurant_id', '$customer_name', ' $f_name', ' $f_cost', '$c_address');";
        
        if(mysqli_query($con,$sql)){

            echo "YOUR ORDER HAS BEEN PLACED SUCCESSFULLY";
        }
    }
    else{
            echo "login";
        }
    
}

//fetching order details
if(isset($_POST["order"]))
{
    $rid=$_SESSION["rid"];
    $sql="SELECT *FROM customer_order WHERE restaurant_id='$rid'";
    
    $o_result=mysqli_query($con,$sql);
    echo " <div class='text-center my-3'><h3>Order Details</h3></div>
             <table class='table my-2'>
                 <thead class='thead-dark'>
                     <tr>
                         <th scope='col'>Customer Name</th>
                         <th scope='col'>Food Item</th>
                         <th scope='col'>Cost</th>
                         <th scope='col'>Address</th>
                     </tr>
                </thead>
                <tbody> ";
    while($row=mysqli_fetch_array($o_result))
	{
       
        $c_name=$row["c_name"];
		$f_name=$row["f_name"];
        $f_cost=$row["cost"];
        $c_add=$row["address"];

        echo "  
            <tr>
                <td>$c_name</td>
                <td>$f_name</td>
                <td> $f_cost</td>
                <td> $c_add</td>
            </tr>";
    }
   echo "</tbody></table'";
}

?>