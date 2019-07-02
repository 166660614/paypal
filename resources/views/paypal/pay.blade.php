<head>
    <meta charset="utf-8">
    <script src="https://js.braintreegateway.com/web/dropin/1.18.0/js/dropin.min.js"></script>
</head>
<body>
<div id="dropin-container"></div>
<button id="submit-button">立即支付</button>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    var button = document.querySelector('#submit-button');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/test",
        type: "post",
        dataType: "json",
        data: {},
        success: function (res) {
            console.log(res)
        }
    })
    // braintree.dropin.create({
    //     authorization: 'CLIENT_TOKEN_FROM_SERVER',
    //     container: '#dropin-container'
    // }, function (createErr, instance) {
    //     button.addEventListener('click', function () {
    //         // instance.requestPaymentMethod(function (err, payload) {
    //         //     console.log(payload);
    //         //     console.log(err);
    //         // });
    //     });
    // });
</script>
</body>