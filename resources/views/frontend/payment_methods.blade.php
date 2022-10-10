@extends('frontend.layout');
@section('page_title', 'Order Placed')
@section('contents')

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container mt-5">

            <h2 class="fw-bold">Payment Methods {{ $amount }}</h2>

            <div class="d-flex flex-row mt-4">
                <div class="p-2 bd-highlight border mx-2 payments" id="cod" onclick="payment_confirmation()">
                    <img src="https://e7.pngegg.com/pngimages/510/354/png-clipart-food-indian-cuisine-bangladeshi-cuisine-devops-dubai-cash-on-delivery-text-logo.png"
                        alt="" width="200">
                </div>
                <div class="p-2 bd-highlight border mx-2 payments" id="payment-button">
                    <img src="https://dao578ztqooau.cloudfront.net/static/img/logo1.png" alt="" width="200">
                </div>
            </div>

            <div class="mt-5">
                <a href="{{ url('/confirm_cod/'.$order_id) }}" class="btn btn-outline-primary btn-lg confirmation d-none mx-2">
                    Confirm Order
                </a>
            </div>
        </div>
    </section>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_d1a67f024f3542f8a953edb767a80bdd",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('khalti.verifyPayment') }}",
                        data: {
                            token: payload.token,
                            amount: payload.amount,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            console.log(res);
                            window.location.href = "/order_placed/" + res+"/{{$order_id}}";
                        }
                    });
                },
                onError(error) {
                    console.log(error)
                    // window.location.href = "/order_fail";
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.querySelector('#payment-button');
        btn.onclick = function() {
            let confirm_btn = document.querySelector('.confirmation');
            confirm_btn.classList.add('d-none')
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({
                amount: {{ $amount * 100 }}
            });
        }
    </script>
@endsection
