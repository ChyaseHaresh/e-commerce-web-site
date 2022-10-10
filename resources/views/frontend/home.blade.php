@extends('frontend.layout');

@section('contents')
    <!-- hero start -->
    <div class="hero">
        <div class="row">
            <!-- carousel start-->
            <div class="col-md-8 col-sm-12 px-4 carousel-div">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner p-3 " style="margin-left: 2em;">
                        @foreach ($banner as $list)
                            <div class="carousel-item active">
                                <div class="text-over-main-image1">
                                    <p class="top-text">New Arrivals</p>
                                    <p class="info-text">Sound that goes straight to your heart</p>
                                    <button class="learn-btn">{{ $list->btn_txt }}<i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                                <img src="{{ asset('storage/media/banners/' . $list->image) }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- carousel end-->

            <!-- side hero images start-->
            <div class="col-md-4 col-sm-12 px-4  ">
                <div class="side-hero-image  m-3">
                    <div class="text-over-main-image1-side">
                        <p style="color: blue;">WERABLES</p>
                        <p class="info-text-side fw-bold">Intellectual and Durable design</p>
                    </div>
                    <img src="{{ asset('front_assets/images/hero1.png') }}" alt="">
                </div>
                <div class="side-hero-image m-3">
                    <div class="text-over-main-image2-side">
                        <p style="color:blue;">COMPUTERS</p>
                        <p class="info-text-side fw-bold">Build your own high powered PC</p>
                    </div>
                    <img src="{{ asset('front_assets/images/hero2.png') }}" alt="">
                </div>
            </div>
            <!-- side hero images end-->
        </div>
    </div>
    <!-- hero end -->
    <!-- features start -->
    <div class="features container-fluid">
        <div class="row mx-auto p-4" style=" background-color: #141524;">
            <div class="col-md-3 col-sm-12 d-flex" style="padding-left: 2.5em;">
                <div class="circle mx-2">
                    <i class="bi bi-truck"></i>
                </div>
                <div class=" mx-2 features-text">
                    <p class="fw-bold f-title">Free Shipping</p>
                    <p class="f-text">Free delivery over $100</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 d-flex ">
                <div class="circle mx-2">
                    <i class="bi bi-arrow-up-left"></i>
                </div>
                <div class=" mx-2 features-text">
                    <p class="fw-bold f-title">Free Returns</p>
                    <p class="f-text">Hassle free returns</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 d-flex ">
                <div class="circle mx-2">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <div class=" mx-2 features-text">
                    <p class="fw-bold f-title">Secure Shopping</p>
                    <p class="f-text">Best security features</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 d-flex ">
                <div class="circle mx-2">
                    <i class="bi bi-box"></i>
                </div>
                <div class=" mx-2 features-text">
                    <p class="fw-bold f-title">Unlimited Blocks</p>
                    <p class="f-text">Any content, any page</p>
                </div>
            </div>
        </div>
    </div>
    <!-- features end -->
    <!-- Container 1 Why buy from us start-->
    <div class="container-fluid why-buy-from-us">
        <h2 class="title col-sm-12" style="padding-top:2.5em">Why buy from us?</h2>
        <p class="contents ">Journal has been the best selling and most loved Opencart theme since first launch in 2013.
            Tried and tested by over 20K people, Journal
            is the best Opencart theme framework on the market today. <a href="">Learn more</a></p>
        <div class="tab col-sm-12">
            <ul class="nav nav-tabs p-2" id="myTab" role="tablist"style="border-bottom:0px">
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold active" id="topcategories-tab" data-bs-toggle="tab"
                        data-bs-target="#topcategories" type="button" role="tab" aria-controls="topcategories"
                        aria-selected="true">Top categories</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="electronics-tab" data-bs-toggle="tab"
                        data-bs-target="#electronics" type="button" role="tab" aria-controls="electronics"
                        aria-selected="false">Electronics</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="beauty-tab" data-bs-toggle="tab" data-bs-target="#beauty"
                        type="button" role="tab" aria-controls="beauty" aria-selected="false">Beauty</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="fashion-tab" data-bs-toggle="tab" data-bs-target="#fashion"
                        type="button" role="tab" aria-controls="fashion" aria-selected="false">Fashion</button>
                </li>
            </ul>
        </div>
        <div class="tab-content col-sm-12" id="myTabContent">
            <!-- Tab 1 top categories -->
            <div class="tab-pane fade show active" id="topcategories" role="tabpanel"
                aria-labelledby="topcategories-tab">
                <div class="tabdata" id="topcategories" class="tab-pane fade in active">
                    <div class="row why-buy-from-us">
                        <div class="owl-carousel carousel_se_01_carousel owl-theme">
                            @foreach ($top_categories as $category)
                                <div class="item mb-4">
                                    <div class="card shadow">
                                        <img src="{{ asset('storage/media/category/' . $category->category_image) }}"
                                            alt="image" class="card-img-top">
                                        <div class="card-btn ">
                                            <button>{{ $category->category_name }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab 1 top categories end -->

            <!-- tab 2 electronics -->
            <div class="tab-pane fade " id="electronics" role="tabpanel" aria-labelledby="electronics-tab">
                <div class="tabdata" id="electronics" class="tab-pane fade">
                    <div class="row">
                        <div class="owl-carousel carousel_se_01_carousel owl-theme">

                            @foreach ($electronics as $electronic)
                                <div class="item mb-4">
                                    <div class="card shadow">
                                        <img src="{{ asset('storage/media/category/' . $electronic->category_image) }}"
                                            alt="image" class="card-img-top">
                                        <div class="card-btn ">
                                            <button>{{ $electronic->category_name }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 3 electronics end-->

            <!-- tab 3 beauty -->
            <div class="tab-pane fade " id="beauty" role="tabpanel" aria-labelledby="beauty-tab">
                <div class="tabdata" id="beauty" class="tab-pane fade">
                    <div class="row">
                        <div class="owl-carousel carousel_se_01_carousel owl-theme">

                            @foreach ($beauty as $beauti)
                                <div class="item mb-4">
                                    <div class="card shadow">
                                        <img src="{{ asset('storage/media/category/' . $beauti->category_image) }}"
                                            alt="image" class="card-img-top">
                                        <div class="card-btn ">
                                            <button>{{ $beauti->category_name }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- item end -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 3 beauty end -->

            <!-- tab 4 fashion -->
            <div class="tab-pane fade " id="fashion" role="tabpanel" aria-labelledby="fashion-tab">
                <div class="tabdata" id="fashion" class="tab-pane fade">
                    <div class="row">
                        <div class="owl-carousel carousel_se_01_carousel owl-theme">

                            @foreach ($fashion as $fash)
                                <div class="item mb-4">
                                    <div class="card shadow">
                                        <img src="{{ asset('storage/media/category/' . $fash->category_image) }}"
                                            alt="image" class="card-img-top">
                                        <div class="card-btn ">
                                            <button>{{ $fash->category_name }}</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- item end -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 4 fashion end -->

        </div>
    </div>
    <!-- container-2 Why buy from us -->

    <!-- container-2 Featured products start -->
    <div class="container-fluid bg-light">
        <h2 class="title" style="padding-top:2.5em">Featured Products</h2>
        <p class="contents">Display any products as tabs or accordions with optional grid or carousel mode. Custom products
            per row per module and per breakpoint. Each module can display products in either grid or list view with
            different styles per module. <a href="">Learn more</a></p>
        <div class="tab ">
            <ul class="nav nav-tabs p-2" id="myTab" role="tablist"style="border-bottom:0px">
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold active" id="featured-tab" data-bs-toggle="tab"
                        data-bs-target="#featured" type="button" role="tab" aria-controls="featured"
                        aria-selected="true">Featured</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest"
                        type="button" role="tab" aria-controls="latest" aria-selected="false">Latest</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="bestseller-tab" data-bs-toggle="tab"
                        data-bs-target="#bestseller" type="button" role="tab" aria-controls="bestseller"
                        aria-selected="false">Best Seller</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="specials-tab" data-bs-toggle="tab" data-bs-target="#special"
                        type="button" role="tab" aria-controls="specials" aria-selected="false">Special</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <!-- Tab 1 featured -->
            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <div class="tabdata" id="featured" class="tab-pane fade in active">
                    <div class="row">
                        <div class="owl-carousel carousel_se_02_carousel owl-theme">

                            @foreach ($featured as $feature)
                                <div class="item mb-4">
                                   <a href="{{url('product/'.$feature->slug)}}" style="text-decoration: none">
                                    <div class="card shadow">
                                        <img src="{{ asset('storage/media/product/' . $feature->image) }}" alt="image"
                                            class="card-img-top">
                                        <div class="card-title" style="background-color: #e0e7e7;">
                                            <p class="p-1">hat</p>
                                        </div>
                                        <div class="card-body product">
                                            <p class="product-title fw-bold">{{ $feature->name }}</p>
                                            <p class="price"> $ {{ $feature->price }} <del> ${{ $feature->mrp }}</del>
                                            </p>
                                            <input type="number" value="1"> <button
                                                style="background-color:var(--primary-color); border: 0;color: #fff;">Add
                                                to
                                                Cart</button>
                                            <i class="fa-regular fa-heart"></i>
                                            <i class="fa-solid fa-code-compare"></i>
                                        </div>
                                        <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                            <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                            <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                                Question</a>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            @endforeach

                            <!-- item end -->



                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab 1 top featured end -->

            <!-- tab 2 latest -->
            <div class="tab-pane fade " id="latest" role="tabpanel" aria-labelledby="latest-tab">
                <div class="tabdata" id="latest" class="tab-pane fade">
                    <div class="row">
                        <div class="owl-carousel carousel_se_02_carousel owl-theme">

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/b1.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/b2.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/b3.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/b4.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/b4.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 3 latest end-->

            <!-- tab 3 bestseller -->
            <div class="tab-pane fade " id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                <div class="tabdata" id="bestseller" class="tab-pane fade">
                    <div class="row">
                        <div class="owl-carousel carousel_se_02_carousel owl-theme">

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/c1.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/c2.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/c3.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/c4.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/c5.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 3 bestseller end -->

            <!-- tab 4 specials -->
            <div class="tab-pane fade " id="special" role="tabpanel" aria-labelledby="special-tab">
                <div class="tabdata" id="special" class="tab-pane fade">
                    <div class="row">
                        <div class="owl-carousel carousel_se_02_carousel owl-theme">

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/d1.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->


                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/d2.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/d3.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/d4.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/d5.jpg" alt="image" class="card-img-top">
                                    <div class="card-title" style="background-color: #e0e7e7;">
                                        <p>hat 200</p>
                                    </div>
                                    <div class="card-body product">
                                        <p class="product-title fw-bold">Hat</p>
                                        <p class="price"> $ 3 <del> $5</del></p>
                                        <input type="number" value="1"> <button
                                            style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                            Cart</button>
                                        <i class="fa-regular fa-heart"></i>
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                    <div class="card-foot p-2"style="background-color: #e0e7e7;">
                                        <a href=""><i class="bi bi-coin"></i> Buy Now</a>
                                        <a href="" class="align-right"><i class="bi bi-question-circle"></i>
                                            Question</a>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 4 specials end -->

        </div>
    </div>
    <!-- container-2 Featured products end -->

    <!-- container-3 Featured category start -->
    <div class="container-fluid" style="background-color: #d6e1e7; padding-bottom: 3em;">
        <h2 class="title " style="padding-top:2.5em">Featured Products</h2>
        <p class="contents">Display any products as tabs or accordions with optional grid or carousel mode. Custom products
            per row per module and per breakpoint. Each module can display products in either grid or list view with
            different styles per module. <a href="">Learn more</a></p>
        <div class="row featured-category d-flex">
            <div class=" col-3 left-container">
                <p class="title">Fashion</p>
                <img src="images/a1.jpg" alt="" class="p-2">
                <ul>
                    <li><a href="">Accesories</a></li>
                    <li><a href="">Dresses</a></li>
                    <li><a href=""> Pants</a></li>
                    <li><a href="">T-Shirts</a></li>
                    <li><a href=""> See all in Fashion</a></li>
                </ul>
            </div>
            <div class="col-9 right-container">
                <p class="title">New in Fashion</p>
                <div class="row">
                    <div class="owl-carousel carousel_se_03_carousel owl-theme">

                        <div class="card">
                            <img src="images/a1.jpg" alt="">
                            <div class="card-body">
                                <p>hat</p>
                                <p>$5</p>
                                <hr>
                                <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                    Cart</button>
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-code-compare"></i>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/a2.jpg" alt="">
                            <div class="card-body">
                                <p>hat</p>
                                <p>$5</p>
                                <hr>
                                <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                    Cart</button>
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-code-compare"></i>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/a3.jpg" alt="">
                            <div class="card-body">
                                <p>hat</p>
                                <p>$5</p>
                                <hr>
                                <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                    Cart</button>
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-code-compare"></i>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/a4.jpg" alt="">
                            <div class="card-body">
                                <p>hat</p>
                                <p>$5</p>
                                <hr>
                                <button style="background-color:var(--primary-color); border: 0;color: #fff;">Add to
                                    Cart</button>
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-code-compare"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-3 Featured category end -->

    <!-- container- Brands end -->
    <div class="container-fluid brand">
        <h2 class="title " style="padding-top:2.5em">Shop by Brands</h2>
        <div class="row">
            <div class="owl-carousel carousel_se_04_carousel owl-theme">

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l1.jpg" alt="image" class="card-img-top">
                        <div class="overlay">
                            <div class="brand-text">Hello World</div>
                        </div>
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l2.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l3.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l4.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l5.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l6.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l7.jpg" alt="image" class="card-img-top">
                        <div class="card-btn ">
                            <button>Fashion</button>
                        </div>
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l8.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l9.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l10.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l11.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l12.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l13.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l14.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l15.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l16.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l17.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card shadow">
                        <img src="images/l18.jpg" alt="image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">
                            ‹</span></button><button type="button" role="presentation" class="owl-next">
                        <span aria-label="Next">›</span></button>
                </div>
            </div>
        </div>

    </div>
    <!-- container- Brands start -->

    <!-- container gallery starts -->
    <div class="container-fluid" style="background-color: #294757;">
        <h2 class="title " style="padding-top:2.5em; color: #fff;">Improved Gallery Module</h2>
        <p class="contents" style="color: #848a8c;">
            The Gallery module supports images, videos and can also act as banners that can point to any other page or open
            other Popup modules. Create different modules with images, videos, banners or a combination of all. Add your
            modules on any page in any grid format.
        </p>
        <div class="container d-flex py-5">
            <img class="gallery-img" src="images/g1.jpg" alt="">
            <img class="gallery-img" src="images/g2.png" alt="">
            <img class="gallery-img" src="images/g3.jpg" alt="">
            <img class="gallery-img" src="images/g4.jpg" alt="">
            <img class="gallery-img" src="images/g5.jpg" alt="">
            <img class="gallery-img" src="images/g6.jpg" alt="">
            <img class="gallery-img" src="images/g7.jpg" alt="">
            <img class="gallery-img" src="images/g8.jpg" alt="">
            <img class="gallery-img" src="images/g9.jpg" alt="">
        </div>
    </div>
    <!-- container gallery ends -->

    <!-- container blog starts -->
    <div class="container-fluid" style="background-color: #e9f1f5;">
        <h2 class="title " style="padding-top:2.5em; ">From our Blog</h2>
        <p class="contents">
            Journal comes with its own simple yet powerful blog. With the new advanced typography styles your post page
            design will be unmatched.
        </p>
        <div class="tab">
            <ul class="nav nav-tabs p-2" id="myTab" role="tablist"style="border-bottom:0px;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold active" id="latestpost-tab" data-bs-toggle="tab"
                        data-bs-target="#latestpost" type="button" role="tab" aria-controls="latestpost"
                        aria-selected="true">Latest Post</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="mostread-tab" data-bs-toggle="tab" data-bs-target="#mostread"
                        type="button" role="tab" aria-controls="mostread" aria-selected="false">Most Read</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <!-- Tab 1 Latest post -->
            <div class="tab-pane fade show active" id="latestpost" role="tabpanel" aria-labelledby="latestpost-tab">
                <div class="tabdata" id="latestpost" class="tab-pane fade in active">
                    <div class="row px-4">
                        <div class="owl-carousel carousel_se_05_carousel owl-theme">

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog1.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog2.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog3.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog4.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog5.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog6.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->



                            <!-- item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab 1 top latest post end -->

            <!-- tab 2 Most read -->
            <div class="tab-pane fade " id="mostread" role="tabpanel" aria-labelledby="mostread-tab">
                <div class="tabdata" id="mostread" class="tab-pane fade">
                    <div class="row px-4">
                        <div class="owl-carousel carousel_se_05_carousel owl-theme">

                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog1.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog2.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog3.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog4.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog5.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item mb-4">
                                <div class="card shadow">
                                    <img src="images/blog6.jpg" alt="image" class="card-img-blog">
                                    <div class="card-date ">
                                        <p class="blog-top-date fw-bold">01 Aug</p>
                                    </div>
                                    <div style="text-align:center">
                                        <p class="p-2" style="background-color: grey;"><i
                                                class="fa-solid fa-user"></i>admin <i
                                                class="fa-solid fa-comment-lines"></i> 1 <i
                                                class="fa-solid fa-eye"></i>16253</p>
                                        <div class="card-text">
                                            <p class="heading fw-bold"> The journal is here</p>
                                            <p>The Journal 3 blog has been greatly improved and it now comes with the most
                                                advanced set of typography tools, including custom drop-cap support as well
                                                as optional newspaper-like fluid columns. You can break up the page in up to
                                                4 columns and change the configuration per breakpoint for the best article
                                                layout on any screen width.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item end -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- tab 3 most read end-->

        </div>
    </div>
    <!-- container blog ends -->

    <!-- container testimonials starts -->
    <div class="container-fluid" style="background-color: #e9f1f5;">
        <h2 class="title " style="padding-top:2.5em; ">What people say about us?</h2>
        <div class="row px-4">
            <div class="owl-carousel carousel_se_05_carousel owl-theme">

                <div class="item testimonials mb-4">
                    <div class="card  border-0">
                        <div class="card-text p-5" style="text-align:center">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                                gvkufyufffffffffffffffffffffffffffffffffhvhjvhjvyfyfyfiuyiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
                            </p>
                            <p class="fw-bold">- Monika Perk</p>
                        </div>
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card testimonials border-0">
                        <div class="card-text p-5" style="text-align:center">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <p class="fw-bold">- Monika Perk</p>
                        </div>
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card testimonials border-0">
                        <div class="card-text p-5" style="text-align:center">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <p class="fw-bold">- Monika Perk</p>
                        </div>
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card testimonials border-0">
                        <div class="card-text p-5" style="text-align:center">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <p class="fw-bold">- Monika Perk</p>
                        </div>
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card testimonials border-0">
                        <div class="card-text p-5" style="text-align:center">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <p class="fw-bold">- Monika Perk</p>
                        </div>
                    </div>
                </div>
                <!-- item end -->
                <div class="item mb-4">
                    <div class="card testimonials border-0">
                        <div class="card-text p-5" style="text-align:center">
                            <i class="fa fa-quote-left"></i>
                            <p>They have got a beautiful collection of plants. It is really amazing.
                                I love it.
                            </p>
                            <p class="fw-bold">- Monika Perk</p>
                        </div>
                    </div>
                </div>
                <!-- item end -->
                <!-- item end -->

            </div>
        </div>


    </div>

    <!-- container testimonials ends -->
@endsection
