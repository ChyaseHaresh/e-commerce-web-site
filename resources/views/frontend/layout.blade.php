<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

    <link href="{{ asset('front_assets/css/frontstyle.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('front_assets/css/page.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('front_assets/css/user-dashboard.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('front_assets/css/productDetail.css') }}" rel="stylesheet" media="all">
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

</head>

<body>
    <div class="superContainer">
        <!-- Top banner start -->
        {{-- <div class="col-sm-12 alert alert-primary alert-dismissible fade show text-center" role="alert">
            <strong>Banner! Banner!Banner!</strong> banner part
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        <!-- Top banner end -->

        <!-- Top header nav start -->
        <div class="topgroup col-sm-12">
            <div class="row ">
                <div class="col-md-5 p-2 col-sm-12">
                    <div class="input-group mx-5">
                        <!-- left nav items-->
                        <a class="mx-1 py-1"href=""><i class="fa-regular fa-house mx-2"></i>Home</a>
                        <a class="mx-1 py-1"href=""><i class="fa-regular fa-user mx-2"></i>About Us</a>
                        <a class="mx-1 py-1"href=""><i class="fa-regular fa-envelope mx-2"></i>Contact</a>
                        <a class="mx-1 py-1"href=""><i class="fa-regular fa-circle-question mx-2"></i>FAQ</a>
                    </div>
                </div>
                <!-- Center nav items -->
                <div class="col-md-4 col-sm-12">
                    <!-- Choosing Country / Language  -->
                    <div class="dropdown">
                        <button class="dropbtn ">
                            <a href="#" class="lang_sel_sel icl-en">
                                <img class="iclflag p-2"
                                    src="https://discussion.qodeinteractive.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                                    alt="en" title="English">English
                                <i class="fa fa-caret-down"></i>
                            </a>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">
                                <img class="iclflag p-2"
                                    src="https://discussion.qodeinteractive.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png"
                                    alt="fr" title="French">France
                            </a>
                            <a href="#">
                                <a href="#">
                                    <img class="iclflag p-2"
                                        src="https://discussion.qodeinteractive.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.png"
                                        alt="de" title="German">German
                                </a>
                                <a href="#">
                                    <img class="iclflag p-2"
                                        src="https://discussion.qodeinteractive.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png"
                                        alt="it" title="Italian">Italian
                                </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn p-2">
                            <a href="#" class="p-2">
                                $ US Doller
                                <i class="fa fa-caret-down"></i>
                            </a>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" class="p-2"> €
                                Euro
                            </a>
                            <a href="#" class="p-2">£ Pound Sterling
                                <a href="#">
                                </a>
                                <a href="#" class="p-2">$ US Dollar
                                </a>
                        </div>
                    </div>
                </div>

                <!-- Right nav Items -->
                <div class="col-md-3 col-sm-12 align-right">

                    @if (auth()->check())
                        <div class="nav-item dropdown text-dark">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">{{ auth()->user()->name }}</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">{{ auth()->user()->email }}</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="{{url('/order')}}">My Orders</a></li>
                                <li><a class="dropdown-item border-top" href="{{ url('/logout') }}">Logout</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="dropdown">
                        <button class="dropbtn p-2">
                            <a href="#" class="p-2">
                                <i class="fa-solid fa-user"></i> <i class="fa-solid fa-bars"></i> More Menus
                                <i class="fa fa-caret-down"></i>
                            </a>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" class="p-2"> The Best Menu
                            </a>
                            <a href="#" class="p-2">Options You Will
                            </a>
                            <a href="#" class="p-2">Ever Find
                            </a>
                            <a href="#" class="p-2">In a Theme
                            </a>
                        </div>
                    </div>
                    <a href=""><i class="bi bi-truck"></i> Delivery</a>
                </div>
            </div>
        </div>
        <!-- Top header nav end -->

        <!-- LOgo Search nav bar start-->
        <div class="betweenNav">
            <div class="row p-4">

                <!-- logo part start -->
                <div class="col-md-2 col-sm-12 py-2">
                    <img src="https://www.elscript.com/images/2.webp" width="190" alt="">
                </div>
                <!-- logo part end -->

                <!-- search bar start -->
                <div class="col-md-6 col-sm-12">
                    <div class="input-group input-group-lg mb-3">
                        <div class="dropdown2">
                            <div class="dropbtn2">All</div>
                            <!--  Main Dropdown -->
                            <div class="dropdown-one">
                                <div id="link1" class="dItem" href="#">Link 1
                                    <!--  Inside Dropdown -->
                                    <div class="dropdown-two">
                                        <div class="dItem" id="file" href="#">Import</div>
                                    </div>
                                </div>
                                <div class="dItem" href="#"></div>
                                <div class="dItem" href="#">Fashion</div>
                                <div class="dItem" href="#">Bags</div>
                                <div class="dItem" href="#">Health & Beauty</div>
                                <div class="dItem" href="#">Footwear</div>
                                <div class="dItem" href="#">Home Decor</div>
                                <div class="dItem" href="#">Electronics</div>
                                <div class="dItem" href="#">Appliances</div>
                                <div class="dItem" href="#">Baby & Kids</div>
                                <div class="dItem" href="#">Flowers</div>
                                <div class="dItem" href="#">Food</div>
                                <div class="dItem" href="#">Sports</div>
                            </div>

                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button"
                            placeholder="Search here...">
                        <button class="btn searchbtn" type="button" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>



                <!-- search bar end -->

                <!-- login,register,...menu items start-->
                <div class="col-md-2 col-sm-6">
                    <div class="top-menu d-flex">
                        @if (auth()->check())
                            {{-- <img src="{{auth()->user()->avatar}}" alt=""> --}}
                            {{-- <span>{{ session('u_name') }}</span> --}}
                            {{-- <span>{{ auth()->user()->name }}</span> --}}
                            {{-- <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">{{ auth()->user()->name }}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">{{ auth()->user()->email }}</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item border-top" href="{{ url('/logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </div> --}}
                        @else
                            <a><i class="fa-solid fa-circle-user " data-bs-toggle="modal"
                                    data-bs-target="#loginModal"></i><br>Login</a>
                        @endif


                        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="Enter your email">
                                                </div>
                                            </div>
                                            <div class=" row mb-3">
                                                <label for="password" class="col-form-label">Password</label>
                                                <div class="col-sm-9 ">
                                                    <input type="password" class="form-control" id="password"
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
                        <a><i class="fa-solid fa-pen-to-square " data-bs-toggle="modal"
                                data-bs-target="#RegisterModal"></i><br>Register</a>
                        <div class="modal fade" id="RegisterModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: var(--primary-color);">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Sign Up
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('user.register') }}" method="POST">
                                        @csrf
                                        <div class="modal-body p-4">
                                            <div class=" row mb-3">
                                                <p class="title" style="margin-top: 1em;">Your Personal Information
                                                </p>
                                                <p class="col-sm-3 d-flex">Full Name:</p>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="fname"
                                                        name="fullname" placeholder="Enter your full name">
                                                </div>
                                            </div>

                                            <div class=" row mb-3">
                                                <p class="col-sm-3 d-flex">Email:</p>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="Enter your email">
                                                </div>
                                            </div>
                                            <div class=" row mb-3">
                                                <p class="col-sm-3 d-flex">Phone:</p>
                                                <div class="col-sm-8 ">
                                                    <input type="telephone" class="form-control" id="telephone"
                                                        name="phone" placeholder="Enter your number">
                                                </div>
                                            </div>


                                            <div class=" row mb-3">
                                                <p class="title" style="margin-top: 1em;">Your Password</p>
                                                <p class="col-sm-3 d-flex">Password:</p>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="lname"
                                                        name="password" placeholder="">
                                                </div>
                                            </div>
                                            <div class=" row mb-3">
                                                <p class="col-sm-3 d-flex">Confirm Password:</p>
                                                <div class="col-sm-8">
                                                    <input type="confirmpassword" class="form-control" id="email"
                                                        name="confirm_password" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            {{--
                                            <div class=" row mb-3">
                                                <p class="title" style="margin-top: 1em;">Newsletter</p>
                                                <p>Subcribe</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary ">Signup</button>
                                            <a style="color: white" class="btn btn-danger"
                                                href="{{ url('/auth/google/redirect') }}">SignUp
                                                With GOOGLE</a>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                        <a><i class="fa-regular fa-heart"></i><br>Wishlist</a>
                        <a><i class="fa-solid fa-arrow-right-arrow-left"></i><br>Compare</a>
                    </div>
                </div>
                <!-- login,register,...menu items end -->
                @php
                    if (count(getAddToCartTotalItem()) > 0) {
                        $getAddToCartTotalItem = getAddToCartTotalItem();

                        $cart_item = count(getAddToCartTotalItem());
                        $totalPrice = 0;
                        foreach ($getAddToCartTotalItem as $cartItem) {
                            $totalPrice = $totalPrice + $cartItem->qty * $cartItem->price;
                        }
                    } else {
                        $cart_item = 0;
                        $totalPrice = '0.00';
                    }

                @endphp
                <!-- cart nav start -->
                <div class="col-md-2 col-sm-6">
                    <a href="/cart" class="carttext">{{ $cart_item }} item(s) - Rs.
                        {{ number_format($totalPrice) }} <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
                <!-- cart nav end -->
            </div>
        </div>
        <!-- LOgo Search nav bar end-->

        <!-- nav bar start-->
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container-fluid  ">
                <div class="navbar-nav fw-bold align-left">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="dropdown-nav">
                            <div class="nav-link highlighted-item mx-4 dropdown1">
                                <div class="dropbtn1"><i class="fa-solid fa-bars"></i> All departments</div>
                                <!--  Main Dropdown -->
                                <div class="dropdown-one">
                                    <div id="link1" class="dItem" href="#">Shop by Category
                                        <!--  Inside Dropdown -->
                                        <div class="dropdown-two">
                                            <div class="row dItem d-flex">
                                                <div class="col-sm-3 col-md-3">
                                                    <ul class="flex-column" style="list-style-type:none;">
                                                        <li>
                                                            <a class="gap-2 align-items-center" href="">
                                                                <b> FASHION</b>
                                                            </a>
                                                        </li>
                                                        <li><a href="">Accesories</a></li>
                                                        <li><a href="">Dresses</a></li>
                                                        <li><a href="">Pants</a></li>
                                                        <li><a href="">T-Shirts</a></li>
                                                        <li><a href="">See all products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <ul class="flex-column" style="list-style-type:none;">
                                                        <li><a href="">ELECTRONICS</a></li>
                                                        <li><a href="">Desktops</a></li>
                                                        <li><a href="">Laptops & Notebooks</a></li>
                                                        <li><a href="">Components</a></li>
                                                        <li><a href="">Phones & PDAs</a></li>
                                                        <li><a href="">See all products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <ul class="flex-column" style="list-style-type:none;">
                                                        <li>
                                                            <a class="dropdown-item d-flex gap-2 align-items-center"
                                                                href="#">
                                                                <b>BAGS</b>
                                                            </a>
                                                        </li>
                                                        <li><a href="">Backpacks</a></li>
                                                        <li><a href="">Clutches</a></li>
                                                        <li><a href="">Formal</a></li>
                                                        <li><a href="">Purses</a></li>
                                                        <li><a href="">See all products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <img src="{{ asset('front_assets/images/a1.jpg') }}"
                                                        alt=""style="height=20em;">
                                                </div>
                                            </div>

                                            <div class="row dItem d-flex">
                                                <div class="col-sm-3 col-md-3">
                                                    <ul class="flex-column" style="list-style-type:none;">
                                                        <li>
                                                            <a class="gap-2 align-items-center" href="">
                                                                <b> HEALTH & BEAUTY</b>
                                                            </a>
                                                        </li>
                                                        <li><a href="">Accesories</a></li>
                                                        <li><a href="">Body</a></li>
                                                        <li><a href="">Lipstick</a></li>
                                                        <li><a href="">Makeup</a></li>
                                                        <li><a href="">See all products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <ul class="flex-column" style="list-style-type:none;">
                                                        <li><a href="">FOOTWEAR</a></li>
                                                        <li><a href="">Flats</a></li>
                                                        <li><a href="">Flip Flops</a></li>
                                                        <li><a href="">Heels</a></li>
                                                        <li><a href="">Running</a></li>
                                                        <li><a href="">See all products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <ul class="flex-column" style="list-style-type:none;">
                                                        <li>
                                                            <a class="dropdown-item d-flex gap-2 align-items-center"
                                                                href="#">
                                                                <b>FOOD</b>
                                                            </a>
                                                        </li>
                                                        <li><a href="">Breakfast</a></li>
                                                        <li><a href="">Dessert</a></li>
                                                        <li><a href="">Grill</a></li>
                                                        <li><a href="">Pasta</a></li>
                                                        <li><a href="">See all products</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="dItem" href="#">Shop by Brand</div>
                                    <div class="dItem" href="#">Special Deals</div>
                                    <div class="dItem" href="#">Bestsellers</div>
                                    <div class="dItem" href="#">Custom Links</div>
                                    <div class="dItem" href="#">See All Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-nav">
                            <div class="nav-link dropdown1 ">
                                <div class="dropbtn1">Multi Level</div>
                                <!--  Main Dropdown -->
                                <div class="dropdown-one">
                                    <div id="link1" class="dItem" href="#">Shop by Category
                                        <!--  Inside Dropdown -->
                                        <div class="dropdown-two">
                                            <div class="dItem" id="file" href="#">Import</div>
                                        </div>
                                    </div>
                                    <div class="dItem" href="#">Accessories</div>
                                    <div class="dItem" href="#">Dresses</div>
                                    <div class="dItem" href="#">Pant</div>
                                    <div class="dItem" href="#">Tshirt</div>
                                    <div class="dItem" href="#">Tops</div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-nav">
                            <div class="nav-link dropdown1">
                                <div class="dropbtn1"> Mega Menu</div>
                                <!--  Main Dropdown -->
                                <div class="dropdown-one">
                                    <div id="link1" class="dItem" href="#">Shop by Category
                                        <!--  Inside Dropdown -->
                                        <div class="dropdown-two">
                                            <div class="dItem" id="file" href="#">Import</div>
                                        </div>
                                    </div>
                                    <div class="dItem" href="#">Shop by Category</div>
                                    <div class="dItem" href="#">Shop by Brand</div>
                                    <div class="dItem" href="#">Special Deals</div>
                                    <div class="dItem" href="#">Bestsellers</div>
                                    <div class="dItem" href="#">Custom Links</div>
                                    <div class="dItem" href="#">See All Products</div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-nav">
                            <div class="nav-link dropdown1 ">
                                <div class="dropbtn1"> Full Width</div>
                                <!--  Main Dropdown -->
                                <div class="dropdown-one">
                                    <div id="link1" class="dItem" href="#">Shop by Category
                                        <!--  Inside Dropdown -->
                                        <div class="dropdown-two">
                                            <div class="dItem" id="file" href="#">Import</div>
                                        </div>
                                    </div>
                                    <div class="dItem" href="#">Shop by Category</div>
                                    <div class="dItem" href="#">Shop by Brand</div>
                                    <div class="dItem" href="#">Special Deals</div>
                                    <div class="dItem" href="#">Bestsellers</div>
                                    <div class="dItem" href="#">Custom Links</div>
                                    <div class="dItem" href="#">See All Products</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav fw-bold mx-3 align-right">
                    <a class="nav-link" href="#"><i class="fa-solid fa-phone"></i> 1.800.555.6789</a>
                    <a class="nav-link highlighted-item" href="#"><i class="fa-solid fa-message"></i> BLOG</a>
                </div>
            </div>
        </nav>
        <!-- nav bar end-->
        @section('contents')
        @show
        <!-- container recently viewed, most viewed starts -->
        <div class="container-fluid" style="background-color: #294757; margin-top: 0;">
            <div class="tab">
                <ul class="nav viewed-tab nav-tabs p-2" id="myTab" role="tablist"style="border-bottom:0px;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold active" id="recentlyviewed-tab" data-bs-toggle="tab"
                            data-bs-target="#recentlyviewed" type="button" role="tab"
                            aria-controls="recentlyviewed" aria-selected="true">Recently Viewed</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold" id="mostviewed-tab" data-bs-toggle="tab"
                            data-bs-target="#mostviewed" type="button" role="tab" aria-controls="mostviewed"
                            aria-selected="false">Most Viewed</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <!-- Tab 1 recently viewed, -->
                <div class="tab-pane fade show active" id="recentlyviewed" role="tabpanel"
                    aria-labelledby="recentlyviewed-tab">
                    <div class="tabdata" id="recentlyviewed" class="tab-pane fade in active">
                        <div class="row px-4">
                            <div class="item col-3 mb-4">
                                <div class="card shadow p-0">
                                    <table class="product-table">
                                        <tr>
                                            <td>
                                                <img src="{{ asset('front_assets/images/l1.jpg') }}" alt=""
                                                    style="width:4em;height:4em ;">
                                            </td>
                                            <td>
                                                <p>Apple</p>
                                                <p>$566</p><del>$690</del>
                                                <p><i class="fa-solid fa-cart-shopping"></i> <i
                                                        class="fa-regular fa-heart"></i> <i
                                                        class="fa-solid fa-code-compare"></i></p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <!-- item end -->

                        </div>
                    </div>
                </div>
                <!-- Tab 1 top recently viewed end -->

                <!-- tab 2 Most read -->
                <div class="tab-pane fade " id="mostviewed" role="tabpanel" aria-labelledby="mostviewed-tab">
                    <div class="tabdata" id="mostviewed" class="tab-pane fade">
                        <div class="row px-4">

                            <div class="item col-3 mb-4">
                                <div class="card shadow p-0">
                                    <table class="product-table">
                                        <tr>
                                            <td>
                                                <img src="{{ asset('front_assets/images/l1.jpg') }}" alt=""
                                                    style="width:4em;height:4em ;">
                                            </td>
                                            <td>
                                                <p>Apple</p>
                                                <p>$566</p><del>$690</del>
                                                <p><i class="fa-solid fa-cart-shopping"></i> <i
                                                        class="fa-regular fa-heart"></i> <i
                                                        class="fa-solid fa-code-compare"></i></p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <!-- item end -->
                            <div class="item col-3 mb-4">
                                <div class="card shadow p-0">
                                    <table class="product-table">
                                        <tr>
                                            <td>
                                                <img src="{{ asset('front_assets/images/l1.jpg') }}" alt=""
                                                    style="width:4em;height:4em ;">
                                            </td>
                                            <td>
                                                <p>Apple</p>
                                                <p>$566</p><del>$690</del>
                                                <p><i class="fa-solid fa-cart-shopping"></i> <i
                                                        class="fa-regular fa-heart"></i> <i
                                                        class="fa-solid fa-code-compare"></i></p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <!-- item end -->


                        </div>
                    </div>
                </div>
                <!-- tab 3 most read end-->

            </div>
        </div>
        <!-- container most viwed ends -->

        <!-- socials container start -->
        <div class="container-fluid" style="background-color: #e6e6eb;">
            <div class="socials justify-content-center d-flex p-3">
                <div class="social-circle p-2 m-2"><i class="bi bi-facebook"></i></div>
                <div class="social-circle p-2 m-2"><i class="bi bi-twitter"></i></div>
                <div class="social-circle p-2 m-2"><i class="bi bi-instagram"></i></div>
                <div class="social-circle p-2 m-2"><i class="bi bi-youtube"></i></div>
                <div class="social-circle p-2 m-2"><i class="bi bi-linkedin"></i></div>
                <div class="social-circle p-2 m-2"><i class="bi bi-skype"></i></div>
                <div class="social-circle p-2 m-2"><i class="bi bi-google"></i></div>
            </div>
        </div>
        <!-- socials container end-->

        <!-- Footer Start -->
        <div class="container footer">
            <footer class="py-5">
                <div class="row">
                    <div class="col-4 col-md-3 mb-3">
                        <p class="fw-bold">About Us</p>
                        <hr style="height: 2em; width: 3em;color:orangered ">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-primary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4 col-md-3 mb-3 ">
                        <p class="fw-bold">Customer Service</p>
                        <hr style="height: 2em; width: 3em;color:orangered ">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-primary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-3 mb-3">
                        <p class="fw-bold">My Account</p>
                        <hr style="height: 2em; width: 3em;color:orangered ">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-primary">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-3  mb-3">
                        <form>
                            <p class="fw-bold">Newsletter</p>
                            <hr style="height: 2em; width: 3em;color:orangered ">
                            <p>Stay up to date with news and promotions by signing up for our newsletter </p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control"
                                    placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"
            style="background-color:#294757 ;">
            <p class="p-3" style="color: #a6a5a2;">© 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>

        </footer>
    </div>
    <!-- Footer end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Init Owl Carousel -->
    <script src="{{ asset('front_assets/js/productDetail.js') }}"></script>

    <script>
        /*scrolling banner*/
        (function($) {
            "use strict";

            $(document).ready(function() {
                $(".carousel_se_01_carousel").owlCarousel({
                    items: 3,
                    nav: true,
                    loop: true,

                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    mouseDrag: true,
                    responsiveClass: true,
                    navText: ["<i class='fas fa-long-arrow-alt-left'></i>",
                        "<i class='fas fa-long-arrow-alt-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        480: {
                            items: 1,
                        },
                        767: {
                            items: 2,
                        },
                        992: {
                            items: 5,
                        },
                        1200: {
                            items: 5,
                        },
                    },
                });
            });

            $(document).ready(function() {
                $(".carousel_se_02_carousel").owlCarousel({
                    items: 4,
                    nav: true,
                    loop: true,

                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    mouseDrag: true,
                    responsiveClass: true,
                    navText: ["<i class='icofont-bubble-left'></i>",
                        "<i class='icofont-bubble-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        480: {
                            items: 2,
                        },
                        767: {
                            items: 3,
                        },
                        992: {
                            items: 3,
                        },
                        1200: {
                            items: 4,
                        },
                    },
                });
            });

            $(document).ready(function() {
                $(".carousel_se_03_carousel").owlCarousel({
                    items: 4,
                    nav: true,
                    dots: true,
                    loop: true,

                    mouseDrag: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    navText: ["<i class='icofont-scroll-left'></i>",
                        "<i class='icofont-scroll-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        480: {
                            items: 2,
                        },
                        767: {
                            items: 3,
                        },
                        992: {
                            items: 3,
                        },
                        1200: {
                            items: 4,
                        },
                    },
                });
            });

            $(document).ready(function() {
                $(".carousel_se_04_carousel").owlCarousel({
                    items: 18,
                    nav: true,
                    dots: true,
                    loop: true,

                    mouseDrag: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    navText: ["<i class='icofont-scroll-left'></i>",
                        "<i class='icofont-scroll-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        480: {
                            items: 3,
                        },
                        767: {
                            items: 5,
                        },
                        992: {
                            items: 7,
                        },
                        1200: {
                            items: 9,
                        },
                    },
                });
            });

            $(document).ready(function() {
                $(".carousel_se_05_carousel").owlCarousel({
                    items: 6,
                    nav: true,
                    dots: true,
                    loop: true,

                    mouseDrag: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    navText: ["<i class='icofont-scroll-left'></i>",
                        "<i class='icofont-scroll-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        480: {
                            items: 2,
                        },
                        767: {
                            items: 3,
                        },
                        992: {
                            items: 3,
                        },
                        1200: {
                            items: 3,
                        },
                    },
                });
            });
        })(jQuery);
    </script>
</body>

</html>
