@extends('client_layouts.master')
@section('title')
    Login
@endsection
@section('content')
  <!-- my account start  -->
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-32">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>Login</h2>
                    <form action="#">
                        <p>
                            <label>Username or email <span>*</span></label>
                            <input type="text">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password">
                        </p>
                        <div class="login_submit">
                            <a href="#">Lost your password?</a>
                            <label for="remember">
                                <input id="remember" type="checkbox">
                                Remember me
                            </label>
                            <button type="submit">login</button>

                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->
<!-- my account end   -->
        </div>
    </div>
    <br><br>

@endsection