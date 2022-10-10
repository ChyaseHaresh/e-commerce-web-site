@extends('frontend.layout');
@section('page_title', 'Checkout')
@section('contents')


    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">
                        <form id="frmPlaceOrder">
                            @csrf
                            <div class="row">

                                {{-- <div class="col-md-8">
                                    <div class="checkout-left">
                                        <div class="panel-group" id="accordion">
                                            {{-- @if (session()->has('FRONT_USER_LOGIN') == null)
                                                <input type="button" value="Login" class="aa-browse-btn"
                                                    data-toggle="modal" data-target="#login-modal">
                                                <br /><br />
                                                OR
                                                <br /><br />
                                            @endif
                                <!-- Shipping Address -->
                                <div class="">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion">
                                                User Details Address
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="aa-checkout-single-bill">
                                                        <input type="text" placeholder=" Name*"
                                                            value="{{ $customers['name'] }}" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="aa-checkout-single-bill">
                                                        <input type="email" placeholder="Email Address*"
                                                            value="{{ $customers['email'] }}" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="aa-checkout-single-bill">
                                                        <input type="tel" placeholder="Phone*"
                                                            value="{{ $customers['phone'] }}" name="mobile" required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="aa-checkout-single-bill">
                                                        <textarea cols="8" rows="3" name="address" required placeholder="Enter Address*"> </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="aa-checkout-single-bill">
                                                        <input type="text" placeholder="City / Town*"
                                                            {{-- value="{{ $customers['city'] }}" --} name="city" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="aa-checkout-single-bill">
                                                        <input type="text" placeholder="State*" {{-- value="{{ $customers['state'] }}" --}
                                                            name="state" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="aa-checkout-single-bill">
                                                        <input type="text" placeholder="Postcode / ZIP*"
                                                            {{-- value="{{ $customers['zip'] }}" --} name="zip" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                             </div>
                                 </div>
                                </div>
                                --}}

                                <div class="col-md-7 col-lg-8">
                                    <h4 class="mb-3">Billing address</h4>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <label for="firstName" class="form-label">Name<sup
                                                    class="text-danger">*</sup></label>
                                            <input type="text" class="form-control" id="firstName" name="name"
                                                value="{{ $customers['name'] }}" required>
                                            <div class="invalid-feedback">
                                                Valid name is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="email" class="form-label">Email<sup
                                                    class="text-danger">*</sup></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $customers['email'] }}" required>
                                            <div class="invalid-feedback">
                                                Valid email is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="phone" class="form-label">Phone<sup
                                                    class="text-danger">*</sup></label>
                                            <input type="number" class="form-control" id="number" name="phone"
                                                value="{{ $customers['phone'] }}" required>
                                            <div class="invalid-feedback">
                                                Valid number is required.
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="address" class="form-label">Address<sup
                                                    class="text-danger">*</sup></label>
                                            <textarea style="height: 10rem" class="form-control" id="address" name="address" placeholder="1234 Main St" required></textarea>

                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>



                                        <div class="col-md-5">
                                            <label for="city" class="form-label">City/Town<sup
                                                    class="text-danger">*</sup></label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Ex. Kathmandu" required>
                                            <div class="invalid-feedback">
                                                Please select a valid city.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="state" class="form-label">State</label>
                                            <input type="text" class="form-control" id="state" name="state"
                                                placeholder="Ex. Bagmati">

                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="zip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="zip" name="zip"
                                                placeholder="Ex. 44600" required="">
                                            <div class="invalid-feedback">
                                                Zip code required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="checkout-right">
                                        <h4>Order Summary</h4>
                                        <div class="aa-order-summary-area">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $totalPrice = 0;
                                                    @endphp
                                                    @foreach ($cart_data as $list)
                                                        @php
                                                            $totalPrice = $totalPrice + $list->price * $list->qty;
                                                        @endphp

                                                        <tr>
                                                            <td>{{ $list->name }} <strong> x {{ $list->qty }}</strong>
                                                                <br />
                                                                <span class="cart_color">{{ $list->color }}</span>
                                                            </td>
                                                            <td>{{ number_format($list->price * $list->qty) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr class="d-none show_coupon_box">
                                                        <th>Coupon Code <a href="javascript:void(0)"
                                                                onclick="remove_coupon_code()"
                                                                class="remove_coupon_code_link">Remove</a></th>
                                                        <td id="coupon_code_str"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td id="total_price">INR {{ number_format($totalPrice) }}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <h4>Coupon Code</h4>
                                        <div class="aa-payment-method coupon_code">
                                            <input type="text" placeholder="Coupon Code"
                                                class="aa-coupon-code apply_coupon_code_box" name="coupon_code"
                                                id="coupon_code">
                                            <input type="button" value="Apply Coupon"
                                                class="aa-browse-btn apply_coupon_code_box" onclick="applyCouponCode()">
                                            <div id="coupon_code_msg"></div>
                                        </div>
                                        <br />
                                        {{-- <h4>Payment Method</h4> --}}
                                        <div class="aa-payment-method">
                                            {{-- <label for="cod"><input type="radio" id="cod"
                                                    name="payment_type" value="COD" checked> Cash on Delivery </label>
                                            <br>
                                            <label for="instamojo">
                                                <input type="radio" id="instamojo" name="payment_type"
                                                    value="Gateway">
                                                Via Instamojo </label> --}}
                                            <br>
                                            <input type="submit" value="Place Order" class="btn btn-primary w-100"
                                                id="btnPlaceOrder">
                                        </div>

                                        <div id="order_place_msg"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
