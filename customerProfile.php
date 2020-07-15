<?php
session_start();
if(!isset($_SESSION["cid"])){
  header("location:index.php");
}

include 'include/c-partials/header.php';
?>

<!--MAIN CONTENT STARTS HERE--->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 <div id="get_rest"></div>
            </div>
        </div>
        <div class="col-sm-8">
            <div id="get_rest_food"></div>
        </div>
    </div>
</div>

<!--MAIN CONTENT ENDS HERE--->

<?php
include 'include/c-partials/footer.php';
?>