<?php
session_start();
if(!isset($_SESSION["rid"])){
  header("location:restaurantLogin.php");
}
include 'include/r-partials/header.php';
?>

<!--MAIN CONTENT STARTS HERE--->
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div id="get_order"></div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

<!--MAIN CONTENT ENDS HERE--->
<script src="main.js"></script>
<?php
include 'include/r-partials/footer.php';
?>