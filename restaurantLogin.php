<?php 
session_start();
if(isset($_SESSION["rid"])){
  header("location:restaurantProfile.php");
}
include('include/r-partials/header.php');

?>
<div class="container">
    <div class="text-center my-4">
        <h1>FoodShala</h1>
        <h3>Restaurant Login</h3>
    </div>
    <div class="row my-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-12">
            <form class="form-signin">
                <div class="form-label-group">
                    <input type="email" id="r_inputEmail" class="form-control" placeholder="Email address" required
                        autofocus>
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="form-label-group">
                    <input type="password" id="r_inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" id="restLogin" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>