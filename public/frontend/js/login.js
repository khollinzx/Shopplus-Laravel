$(document).ready(function () {
    showCartItems();

    function showCartItems() {

        var url = "/show-cart-items";
        $.ajax({
            type: "GET",
            url: url,
            data: "getnumber",
            success: function (response) {
                $(".cartQunatity").html(response.qty);
            }
        });
    }
});
