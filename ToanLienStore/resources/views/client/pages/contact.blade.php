@extends('client.master.master')

@section('title','Liên hệ')

@section('css')
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/style.css')}}" type="text/css">
@endsection

@section('header')
    @include('client.layout.header')
@endsection

@section('main')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Liên hệ</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Trang chủ</a>
                            <span>Liên hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="row col-lg-6">
                    <div class="col-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_phone"></span>
                            <h4>Điện thoại</h4>
                            <p>+01-3-8888-6868</p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_pin_alt"></span>
                            <h4>Địa chỉ</h4>
                            <p>Sạp 951-909 Chợ Bến Thành</p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_clock_alt"></span>
                            <h4>Thời gian mở cửa</h4>
                            <p>8:00 am to 22:00 pm</p>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_mail_alt"></span>
                            <h4>Email</h4>
                            <p>muoihuong@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5110619494685!2d106.69608971535175!3d10.772114762217521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3f3129e64d%3A0x8d6b2d79522c7f30!2zQ2jhu6MgQuG6v24gVGjDoG5o!5e0!3m2!1svi!2s!4v1628674912590!5m2!1svi!2s"                            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <div class="map-inside">
                            <i class="icon_pin"></i>
                            <div class="inside-widget">
                                <h4>Chợ Bến Thành</h4>
                                <ul>
                                    <li>Điện thoại: +842838299274</li>
                                    <li>Đ. Lê Lợi, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh 700000, Việt Nam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Contact Section End -->
@stop

@section('preloader')
    @include('client.layout.preloader')
@endsection

@section('footer')
    @include('client.layout.footer')
@endsection

@section('js')
    <!-- Js Plugins -->
    <script src="{{ asset('client/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('client/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('client/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('client/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('client/js/mixitup.min.js')}}"></script>
    <script src="{{ asset('client/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('client/js/main.js')}}"></script>
@endsection
