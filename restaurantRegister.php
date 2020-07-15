<?php include('include/r-partials/header.php');
    session_start();
    if(isset($_SESSION["rid"])){
        header("location:restaurantProfile.php");
      }
?>


    <div class="container">
        <div class="text-center my-4">
            <h1>FoodShala</h1>
            <h3>Restaurant Register</h3>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" id="signupmsg"></div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row my-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 col-12">
                <form class="form-sign" method="post">
                    <div class="form-label-group">
                        <label for="inputName">Restaurant Name</label>
                        <input type="text" id="inputName" name="r_name" class="form-control"
                            placeholder="Restaurant Name" required autofocus>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" id="inputEmail" name="r_email" class="form-control"
                            placeholder="Email address" required autofocus>
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" name="r_pass" class="form-control"
                            placeholder="Password" required>
                    </div>
                    <button class="btn my-4 btn-lg btn-primary btn-block" id="sign-up" name="sign-up" type="submit">Register</button>
                </form>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>