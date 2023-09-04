@extends('client_layouts.master')

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
                        <li>Inscription</li>
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
                    <h2>Inscription</h2>
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

                    
                            <button type="submit">Inscription</button>

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