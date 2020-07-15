<?php 

session_start();
if(!isset($_SESSION["rid"])){
  header("location:restaurantLogin.php");
}
include 'include/r-partials/header.php';

?>

<!--MAIN CONTENT STARTS HERE--->
<div class="container">

    <div id="get_product">

    </div>

</div>

<!--MAIN CONTENT ENDS HERE--->

<script src="main.js"></script>
<?php include 'include/r-partials/footer.php';?>