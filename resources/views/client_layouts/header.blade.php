<style>
    nav li.active{
        color: rgb(141, 139, 42)
    }
</style>

<div class="header_bottom bottom_four sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="main_menu header_position">
                    <nav>
                        <ul>
                            <li class="{{ request()->is('/') ? 'active': '' }}"><a href="{{ url('/') }}" >Home</a>
                       
                            </li>
                            {{-- <li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a>
                                <div class="mega_menu">
                                    <ul class="mega_menu_inner">
                                        <li><a href="#">Shop Layouts</a>
                                            <ul>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">other Pages</a>
                                            <ul>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Product Types</a>
                                            <ul>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">Concrete Tools</a>
                                            <ul>
                                                <li><a href="shop.html">Cables & Connectors</a></li>
                                                <li><a href="shop-list.html">Graphics Tablets</a></li>
                                                <li><a href="shop-fullwidth.html">Printers, Ink & Toner</a></li>
                                                <li><a href="shop-fullwidth-list.html">Refurbished Tablets</a></li>
                                                <li><a href="shop-right-sidebar.html">Optical Drives</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="banner_static_menu">
                                        <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                <ul class="sub_menu pages">
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                <ul class="sub_menu pages">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="compare.html">compare</a></li>
                                    <li><a href="privacy-policy.html">privacy policy</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li> --}}
                            <li class="{{ request()->is('shop') ? 'active': '' }}"><a href="{{ url('/shop') }}">Shop</a></li>
                            {{-- <li><a href="contact.html"> Contact Us</a></li> --}}
                        </ul>
                    </nav>
                </div> 
            </div>

        </div>
    </div>
</div>