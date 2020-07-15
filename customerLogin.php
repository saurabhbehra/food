<?php
include 'include/c-partials/header.php';
?>


<div class="container">
    <div class="text-center mpage">
        <h1>FoodShala</h1>
        <h3>Customer Login</h3>
    </div>
    <div class="row my-5">n
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-12">
            <form class="form-signin">
                <div class="form-label-group">
                    <input type="email" id="c_inputEmail" class="form-control" placeholder="Email address" required
                        autofocus>
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="form-label-group">
                    <input type="password" id="c_inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php
include 'include/c-partials/footer.php';
?>