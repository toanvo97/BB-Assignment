@extends('client.master.master')

@section('header')
     <!-- Header Section Begin -->
     <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> muoihuong@gmail.com</li>
                                <li>Free Shipping for all Order of 200k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{asset('client/img/vietnamese.png')}}" alt="">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__language">
                                @php
                                    $user = Sentinel::getUser();
                                @endphp
                                @if ($user)
                                    <a href="{{route('user.client.login.index')}}" id="loginForm"><i class="fa fa-user"></i>{{$user->name}}</a>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="{{route('user.client.logout')}}" id="loginForm">Log out</a></li>
                                    </ul>
                                    
                                @else
                                    <a href="{{route('user.client.login.index')}}" id="loginForm"><i class="fa fa-user"></i></a>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="{{route('user.client.login.index')}}" id="loginForm">Sign in</a></li>
                                        <li><a href="{{route('user.client.signup')}}" id="loginForm">Sign up</a></li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('client/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{asset('/')}}">Trang chủ</a></li>
                            <li><a href="{{route('product.index')}}">Sản phẩm</a></li>
                            <li><a href="#">Về cửa hàng</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./news.html">Tin tức</a></li>
                                    {{-- <li><a href="{{route('productDetail')}}">Chi tiết sản phẩm</a></li> --}}
                                    <li><a href="./shoping-cart.html">Giỏ hàng</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="{{route('newsDetail')}}">Chi tiết tin tức</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('news')}}">Tin tức</a></li>
                            <li><a href="{{route('contact')}}">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Sản phẩm: <span>150K vnd</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
@stop
