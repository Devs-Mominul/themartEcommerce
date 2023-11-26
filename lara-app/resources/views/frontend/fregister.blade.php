@extends('frontend.master')
@section('frontend')
<!-- start page-wrapper -->
<div class="page-wrapper">


    <div class="wpo-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="wpo-accountWrapper" action="{{ route('fregister.post') }}" method="POST">
                        @csrf
                        <div class="wpo-accountInfo">
                            <div class="wpo-accountInfoHeader">
                                <a href="index.html"><img src="{{asset('frontend')}}/assets/images/logo-2.svg" alt=""></a>
                                <a class="wpo-accountBtn" href="{{ route('frontends.login') }}">
                                    <span class="">Log in</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{asset('frontend')}}/assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="wpo-accountBtn" href="index.html">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="wpo-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Signup</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="name">First Name</label>
                                    <input type="text" id="fname" name="fname" placeholder="Your first name here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label for="name">Last Name</label>
                                    <input type="text" id="lname" name="lname" placeholder="Your last name here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" placeholder="Your email here..">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="pwd2" type="password" placeholder="Your password here.." value="sfsg" name="password">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal3" type="button"><i class="ti-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="pwd3" type="password" placeholder="Your password here.." value="ssres" name="password_confirmation">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default reveal2" type="button"><i class="ti-eye"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="wpo-accountBtn">Signup</button>
                                </div>
                            </div>

                            <p class="subText">Sign into your pages account <a href="{{ route('frontends.login') }}">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- end of page-wrapper -->

@endsection
