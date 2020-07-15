$(document).ready(function () {
    //adding product to order table

    $("body").delegate("#order_btn", "click", function (event) {
        event.preventDefault();
        var food_id = $(this).attr('f_id');
        var rest_id = $(this).attr('re_id');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: { addToOrder: 1, proid: food_id, restid: rest_id },
            success: function (data) {
                if (data == "login") {
                    window.location.href = "customerLogin.php";
                }
                else{
                    alert(data);
                }
            }
        })
        
    })
})