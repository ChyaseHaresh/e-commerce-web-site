@extends('frontend.layout');

@section('contents')
    <!------------Single product details------------->
    <div class="container single-product">
        <div class="row d-flex">
            <div class="col-md-1 col-sm-12 d-block">
                <div class="small-img-row mt-3">
                    {{-- @if (isset($product_images[$product[0]->id][0])) --}}
                    <div class="row mt-2">
                        <img src="{{ asset('storage/media/product/' . $product[0]->image) }}" class="small-img">
                    </div>
                    @foreach ($product_images[$product[0]->id] as $list)
                        <div class="row mt-2">
                            <img src="{{ asset('storage/media/product/' . $list->attr_image) }}" class="small-img">
                        </div>


                        {{-- <a data-big-image="{{ asset('storage/media/' . $list->images) }}"
                            data-lens-image="{{ asset('storage/media/' . $list->images) }}"
                            class="simpleLens-thumbnail-wrapper" href="#"><img
                                src="{{ asset('storage/media/' . $list->images) }}"
                                width="70px">
                        </a> --}}
                    @endforeach

                    {{-- @endif --}}

                    {{-- <div class="row mt-2">
                        <img src="images/a3.jpg" class="small-img">
                    </div>
                    <div class="row mt-2">
                        <img src="images/a4.jpg" class="small-img">
                    </div> --}}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 ">
                <img src="{{ asset('storage/media/product/' . $product[0]->image) }}"
                    class="product-main-img"id="ProductImg">
            </div>
            <div class="col-md-5 col-sm-12">
                <p>Home/Fashion</p>
                <p class="product-text">{{ $product[0]->name }}</p>
                <h3 class="fw-bold">Rs. {{ $product[0]->price }}</h3>
                <h5 class="">Rs. <s>{{ $product[0]->mrp }}</s></h5>
                <form action="{{route('add_to_cart')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $product[0]->id }}" name="p_id">
                    {{-- <input type="hidden" value="{{ $product_attr[$product[0]->id]->id }}" name="p_attr_id"> --}}
                    <input type="hidden" value="{{ $product[0]->image }}" name="p_img">
                    <input type="hidden" name="size_id" id="p_size" value="{{$product_attr[$product[0]->id][0]->size_id}}">
                    <input type="hidden" name="color_id" id="p_color" value="{{$product_attr[$product[0]->id][0]->color_id}}">
                    <input type="hidden" name="actual_size" id="a_size" value="{{$product_attr[$product[0]->id][0]->size}}">
                    <input type="hidden" name="actual_color" id="a_color" value="{{$product_attr[$product[0]->id][0]->color}}">
                    <label for="pqty">Quantity: </label>
                    <input type="number"value="1" name="pqty" id="pqty" min="0" >

                <br>

                <div class="size-button mt-3">
                    <label for="size">Choose a size:</label>
                    <div class="d-flex">
                        @foreach ($product_attr[$product[0]->id] as $sizes)
                            <span class="m-2 p-2 border sizes" onclick="showSizes(this, '{{$sizes->size_id}}')">{{ $sizes->size }}</span>
                        @endforeach
                    </div>
                    {{-- <select name="size" id="size">
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select> --}}

                    <label for="size">Choose a Color:</label>
                    <div class="d-flex">
                        @foreach ($product_attr[$product[0]->id] as $colors)
                            <span class="m-2 p-2 border colors" onclick="showColor(this, '{{$colors->color_id}}')">{{ $colors->color }}</span>
                        @endforeach
                    </div>
                    @if (auth()->check())
                        <button type="submit" class="cartbtn">Add to Cart <i class="bi bi-cart3"></i></button>
                    @else
                        <a href="javascript:void(0)" class="cartbtn" data-bs-toggle="modal" data-bs-target="#loginModal2">Add to Cart <i
                                class="bi bi-cart3"></i></a>
                    @endif
                </form>

                    <div class="modal fade" id="loginModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: var(--primary-color);">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                                        Returning Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('user.auth') }}" method="POST">
                                    @csrf
                                    <div class="modal-body p-4">
                                        <div class=" row mb-3">
                                            <p class="d-flex">Email :</p>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control w-100" id="email"
                                                    name="email" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class=" row mb-3">
                                            <label for="password" class="col-form-label">Password</label>
                                            <div class="col-sm-9 ">
                                                <input type="password" class="form-control w-100" id="password"
                                                    name="password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <a href="">Forgetten Password</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        <a class="btn btn-danger" href="{{ url('/auth/google/redirect') }}">Login
                                            With GOOGLE</a>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

                <p class="mt-3 fs-2">Product Details </p>

                <p>Care level: Easy to Intermediate<br>
                    <br>
                </p>
                {!! $product[0]->desc !!}

            </div>
        </div>


        <!-------title------>

        <div class="row row-2 mt-5">
            <p class="related-text">Related products</p>
            <p>View More</p>
        </div>



        <div class="row">

            <div class=" col-2 card">
                <img src="images/a1.jpg" alt="">
                <div class="card-body">
                    <p>hat</p>
                    <p>$5</p>
                    <hr>
                    <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to Cart</button>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-code-compare"></i>
                </div>
            </div>
            <div class="col-2 card">
                <img src="images/a2.jpg" alt="">
                <div class="card-body">
                    <p>hat</p>
                    <p>$5</p>
                    <hr>
                    <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to Cart</button>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-code-compare"></i>
                </div>
            </div>
            <div class="col-2 card">
                <img src="images/a3.jpg" alt="">
                <div class="card-body">
                    <p>hat</p>
                    <p>$5</p>
                    <hr>
                    <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to Cart</button>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-code-compare"></i>
                </div>
            </div>
            <div class="col-2 card">
                <img src="images/a4.jpg" alt="">
                <div class="card-body">
                    <p>hat</p>
                    <p>$5</p>
                    <hr>
                    <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to Cart</button>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-code-compare"></i>
                </div>
            </div>
            <div class="col-2 card">
                <img src="images/a4.jpg" alt="">
                <div class="card-body">
                    <p>hat</p>
                    <p>$5</p>
                    <hr>
                    <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to Cart</button>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-code-compare"></i>
                </div>
            </div>

        </div>


    </div>

    <!-- Footer end-->

    <!-----------js for product gallery-------->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
    </script>
@endsection
