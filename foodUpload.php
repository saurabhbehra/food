<?php
session_start();
if(!isset($_SESSION["rid"])){
  header("location:restaurantLogin.php");
}
include 'include/r-partials/header.php';
?>

<!--MAIN CONTENT STARTS HERE--->
<div class="container">
    <div class="text-center my-4">
        <h1>FoodShala</h1>
        <h3>Upload Food Item</h3>
    </div>
    <div class="row my-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-12">
            <form class="food">
                <div class="form-label-group">
                    <label>Food Name</label>
                    <input type="text" id="inputFoodName" name="f_name" class="form-control" placeholder="Food Name"
                        required autofocus>
                </div>
                <div class="form-label-group">
                    <label>Price</label>
                    <input type="Number" id="inputPrice" name="f_price" class="form-control" placeholder="Price"
                        required>
                </div>
                <div class="form-label-group">
                    <label>Food type</label>
                    <select class="form-control" name="f_type">
                        <option>Veg</option>
                        <option>Non-veg</option>
                    </select>
                </div>
                <button class="btn mt-5 btn-lg btn-primary btn-block" id="f_upload" type="submit">Upload</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<?php
include 'include/r-partials/footer.php';
?>