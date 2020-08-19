$(document).ready(function () {
    $('#checkout-button').on('click', function (e) {
            e.preventDefault();
            var emailAddress = $('#email').val();
            var publicKey = 'pk_test_b9ec763282d9ae4ec903e15dd98c3b19db68fbc3';
            var fullname = $('#name').val()
            var amountPaid = $('#amount').val();
            var phoneNumber = $('#phoneNumber').val();

            console.log(amountPaid + " " + phoneNumber);

            // var handler = PaystackPop.setup({
            //     key: publicKey,
            //     email: emailAddress,
            //     amount: amountPaid + '00',
            //     currency: 'NGN',
            //     // ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            //     metadata: {
            //         custom_fields: [{
            //             display_name: fullname,
            //             variable_name: fullname,
            //             value: phoneNumber,
            //         }, ],
            //     },
            //     callback: function (response) {
            //         var reference = response.reference;
            //         $.ajax({
            //             type: 'POST',
            //             url: '../services/Controllers/User/paymentVerification.php',
            //             data: {
            //                 reference: reference,
            //             },
            //             dataType: 'json',
            //             success: function (response) {
            //                 // var respp = xhr;
            //                 // var myResp = $.trim(respp.replace(/[\n]+/g, ''));
            //                 if (response.success == 'true') {
            //                     // window.location.href = "../thanks/" + tokenId;
            //                     Swal.fire({
            //                         position: 'center',
            //                         icon: 'success',
            //                         title: 'Payment Successful',
            //                         showConfirmButton: false,
            //                         timer: 2500,
            //                     });
            //                     setInterval(window.location.href = '?pg=fundwallet', 3000);
            //                 } else {
            //                     Swal.fire({
            //                         position: 'center',
            //                         type: 'error',
            //                         title: 'Payment Failed',
            //                         showConfirmButton: false,
            //                         timer: 2500,
            //                     });
            //                 }
            //             },
            //         });
            //     },
            //     onClose: function () {
            //         alert('window closed');
            //     },
            // });
            // if (handler == undefined) {
            //     alert('network error');
            // }
            // handler.openIframe();
        }
    });
});
