<?php
include 'include/c-partials/header.php';
?>

<div class="container">
    <div class="text-center mpage">
        <h1>FoodShala</h1>
        <h3>Customer Register</h3>
    </div>
    <div class="row my-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-12">
            <form class="form-signin" method="post">
                <div class="form-label-group">
                    <label for="inputName">Name</label>
                    <input type="text" id="inputName" name="customerName" class="form-control"
                        placeholder="Customer Name" required>
                </div>
                <div class="form-label-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                        required>
                </div>
                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control"
                        placeholder="Password" required>
                </div>
                <div class="form-label-group">
                    <label for="inputAddress">Address</label>
                    <input type="address" id="inputAddress" name="address" class="form-control" placeholder="Address"
                        required>
                </div>
                <div class="form-label-group">
                    <label>Food type</label>
                    <select class="form-control" name="foodType">
                        <option>Veg</option>
                        <option>Non-veg</option>
                    </select>
                </div>
                <button class="btn mt-5 btn-lg btn-primary btn-block" id="c_signup" name="c_signup"
                    type="sumbit">Register</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php
include 'include/c-partials/footer.php';
?>