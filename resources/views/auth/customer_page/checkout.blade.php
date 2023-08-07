<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Checkout!</title>
</head>

<body>
    <input id="data" type="text" value="{{ $token }}" hidden>
    <input type="text" id="id_order" value="{{$id_order}}" hidden>
    <a class="btn btn-primary" role="button" id="pay-button">Bayar</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        var yourVariable = document.getElementById('data').value;
        var id_order = document.getElementById('id_order').value;

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        payButton.addEventListener('click', function() {
            console.log("your var");
            console.log(yourVariable);
            // console.log(data);
            window.snap.pay(yourVariable, {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);

                    // Handle the server response
                    // You can access the status_code and status_message from the result object
                    if (result.status_code === 200) {
                        alert(result.status_message);
                        // Redirect to the finish URL after successful payment
                        window.location.href = "http://localhost/";
                    } else {
                        // Handle other status codes if needed
                    }
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("waiting for your payment!");
                    console.log("waiting for your payment!");
                    console.log(result);
                    const urlParams = new URLSearchParams(window.location.search);
        
        // Extract the order_id parameter
        const orderId = urlParams.get('order_id');
                    var paymentData = {
                // Add your payment data here
                'bukti_tf' : "adjadja",
                'metode_bayar': result.status_message

            };
            $.ajax({
                        type:"post",
                        url:"/updatePembayaran/"+id_order,
                        data: paymentData,
                        headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                        success: function(data){
                            alert("response");
                            console.log(data);
                        }
                    });
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                    const urlParams = new URLSearchParams(window.location.search);
                    const orderId = urlParams.get('order_id');
                    var paymentData = {
                // Add your payment data here
                'bukti_tf' : "kjdlada",
                'metode_bayar': result.status_message

            };
            $.ajax({
                        type:"post",
                        url:"/updatePembayaran/"+id_order,
                        data: paymentData,
                        headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                        success: function(data){
                            alert("response");
                            console.log(data);
                        }
                    });
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
