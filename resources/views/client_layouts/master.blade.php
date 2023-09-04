
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 00:36:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{ asset('assets/css/font.awesome.css') }}">
    <!--ionicons min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slinky.menu.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!--modernizr min js here-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area header_padding">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="{{ url('/account') }}"><i class="ion-android-person"></i> My Account</a>
                                  
                                    </li>
                                    <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                            <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li><a href="#">GBP – British Pound</a></li>
                                            <li><a href="#">INR – India Rupee</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">

                                <div class="header_wishlist">
                                    <a href="wishlist.html"><span class="lnr lnr-heart"></span> Wish list </a>
                                    <span class="wishlist_quantity">3</span>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)"><span class="lnr lnr-cart"></span>My Cart </a>
                                    <span class="cart_quantity">2</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">JBL Flip 3 Splasroof Portable Bluetooth 2</a>

                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$60.00</span>

                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Koss Porta Pro On Ear Headphones </a>
                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$69.00</span>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$138.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$138.00</span>
                </div>
            </div>

            <div class="mini_cart_footer">
                <div class="cart_button">
                    <a href="{{ url('/cart') }}">View cart</a>
                </div>
                <div class="cart_button">
                    <a class="active" href="{{ url('/checkout') }}">Checkout</a>
                </div>

            </div>

        </div>
        <!--mini cart end-->

        <!--header bottom satrt-->
         @include('client_layouts.header')
        <!--header bottom end-->
        <div class="discount_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="discount_text">
                            <p>Save Up To 30% On AUTIMA Brand Products <a href="#">Shop Now!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->

    {{-- START CONTENT --}}
      @yield('content')
    {{-- END CONTENT --}}


     <!--call to action start-->
     <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call_action_inner">
                        <div class="call_text">
                            <h3>We Have <span>Recommendations</span> for You</h3>
                            <p>Take 30% off when you spend $150 or more with code Autima11</p>
                        </div>
                        <div class="discover_now">
                            <a href="#">discover now</a>
                        </div>
                        <div class="link_follow">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->

    <!--footer area start-->
    @include('client_layouts.footer')
    <!--footer area end-->


    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal area end-->


<!-- JS
============================================ -->
<!--jquery min js-->
<script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
<!--popper min js-->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<!--bootstrap min js-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--owl carousel min js-->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!--slick min js-->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!--magnific popup min js-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery countdown min js-->
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<!--jquery ui min js-->
<script src="{{ asset('assets/js/jquery.ui.js') }}"></script>
<!--jquery elevatezoom min js-->
<script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
<!--isotope packaged min js-->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!--slinky menu js-->
<script src="{{ asset('assets/js/slinky.menu.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>



</body>


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 00:36:19 GMT -->
</html>

