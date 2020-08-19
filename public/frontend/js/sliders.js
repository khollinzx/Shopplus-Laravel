$(document).ready(function () {
    showCartItems();

    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $("#updateBtn").hide();
    $("#fullname").attr("disabled", true);
    $("#mobile_no").attr("disabled", true);
    $("#address").attr("disabled", true);

    $("#editBtn").on("click", function () {
        $("#address").attr("disabled", false);
        $("#mobile_no").attr("disabled", false);
        $("#fullname").attr("disabled", false);
        $("#updateBtn").show();
        $(this).hide();
    });

    function showCartItems() {

        var url = "/show-cart-items";
        $.ajax({
            type: "GET",
            url: url,
            data: "get-items-from-cart",
            success: function (response) {
                $(".cartQunatity").html(response.qty);
            }
        });
    }

    $(".cart").on("click", function () {
        var id = $(this).parent("div").data('id');
        var url = "/add-to-cart/" + id;

        $.ajax({
            url: url,
            data: "add-item",
            success: function (response) {
                $(".cartQunatity").html(response.qty);
                Swal.fire({
                    position: 'top-end',
                    title: 'Item Has Been Added',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
    });

});
