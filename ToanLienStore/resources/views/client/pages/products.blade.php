@extends('client.master.master')

@section('title','Sản phẩm')

@section('header')
    @include('client.layout.header')
@endsection

@section('main')
            @if(session('error'))
			<div id="error_m" class="alert alert-danger">
				{{session('error')}}
			</div>
			@endif
			@if(session('success'))
				<div id="success_m" class="alert alert-success">
					{{session('success')}}
				</div>
			@endif
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
    <form action="{{route('product.index')}}" method="get" id="productForm">
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Organi Shop</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Home</a>
                                <span>Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Product Section Begin -->
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Department</h4>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <input type="checkbox" class="category-filter" data-name="{{\Illuminate\Support\Str::slug($category->name)}}" name="category_id[]" value="{{$category->id}}">
                                            <a href="#">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar__item">
                                <h4>Brand</h4>
                                <ul>
                                    @foreach ($brands as $brand)
                                        <li>
                                            <input type="checkbox" class="brand-filter" data-name="{{\Illuminate\Support\Str::slug($brand->name)}}" name="brand_id[]" value="{{$brand->id}}">
                                            <a href="#">{{ $brand->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar__item">
                                <h4>Price</h4>
                                <div class="price-range-wrap">
                                    <input type="text" id="minPrice">
                                    <input type="text" id="maxPrice">
                                    <button type="button" id="selectPriceRange">Search</button>
                                </div>
                            </div>
                            {{-- <div class="sidebar__item sidebar__item__color--option">
                                <h4>Colors</h4>
                                <div class="sidebar__item__color sidebar__item__color--white">
                                    <label for="white">
                                        White
                                        <input type="radio" id="white">
                                    </label>
                                </div>
                                <div class="sidebar__item__color sidebar__item__color--gray">
                                    <label for="gray">
                                        Gray
                                        <input type="radio" id="gray">
                                    </label>
                                </div>
                                <div class="sidebar__item__color sidebar__item__color--red">
                                    <label for="red">
                                        Red
                                        <input type="radio" id="red">
                                    </label>
                                </div>
                                <div class="sidebar__item__color sidebar__item__color--black">
                                    <label for="black">
                                        Black
                                        <input type="radio" id="black">
                                    </label>
                                </div>
                                <div class="sidebar__item__color sidebar__item__color--blue">
                                    <label for="blue">
                                        Blue
                                        <input type="radio" id="blue">
                                    </label>
                                </div>
                                <div class="sidebar__item__color sidebar__item__color--green">
                                    <label for="green">
                                        Green
                                        <input type="radio" id="green">
                                    </label>
                                </div>
                            </div> --}}
                            {{-- <div class="sidebar__item">
                                <h4>Popular Size</h4>
                                <div class="sidebar__item__size">
                                    <label for="large">
                                        Large
                                        <input type="radio" id="large">
                                    </label>
                                </div>
                                <div class="sidebar__item__size">
                                    <label for="medium">
                                        Medium
                                        <input type="radio" id="medium">
                                    </label>
                                </div>
                                <div class="sidebar__item__size">
                                    <label for="small">
                                        Small
                                        <input type="radio" id="small">
                                    </label>
                                </div>
                                <div class="sidebar__item__size">
                                    <label for="tiny">
                                        Tiny
                                        <input type="radio" id="tiny">
                                    </label>
                                </div>
                            </div> --}}
                            <div class="sidebar__item">
                                <div class="latest-product__text">
                                    <h4>Latest Products</h4>
                                    <div class="latest-product__slider owl-carousel">
                                        <div class="latest-prdouct__slider__item">
                                            @foreach ($products as $product)
                                                <a href="#" class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6>{{ $product->name }}</h6>
                                                        <span>${{ $product->price }}</span>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                        <div class="latest-prdouct__slider__item">
                                            <a href="#" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>Crab Pool Security</h6>
                                                    <span>$30.00</span>
                                                </div>
                                            </a>
                                            <a href="#" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>Crab Pool Security</h6>
                                                    <span>$30.00</span>
                                                </div>
                                            </a>
                                            <a href="#" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>Crab Pool Security</h6>
                                                    <span>$30.00</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-6 col-md-5">
                                    <div class="filter__sort">
                                        <span>Sort By</span>
                                        <select id="sortPrice">
                                            <option value="asc">From low to high</option>
                                            <option value="desc">From high to low</option>
                                        </select>
                                        <button type="button" id="sortAmount">Sold amount</button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3">
                                    <div class="filter__option">
                                        <span class="icon_grid-2x2"></span>
                                        <span class="icon_ul"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-main">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{asset($product->images)}}">
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="javascript:void(0)" onclick="addProductToCart('{{$product->id}}')" class="add-cart-product" id="addProductCart" data-id="{{$product->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text"
                                        >
                                            <span>{{ $product->categories()->first()->name }} - Brand: {{$product->brand->name}}</span>
                                            <h6 style="font-weight: 600;"><a href="{{route('product.detail', ['id' => $product->id])}}">{{ $product->name }}</a></h6>
                                            <p>Left: {{$product->quantity}}</p>
                                            <h5>${{$product->price}}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="product__pagination">
                            {{-- <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a> --}}
                            @if ($products->lastPage() > 1)
                            <ul class="pagination">
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }}">
                                        <a href="{{ $products->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                            </ul>
                            @endif                                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->
    </form>
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

    <script>
        var arrParam = [];
        var arrBrandParam = [];
        var arrCateIdParam = [];
        var arrBrandIdParam = [];
        var url = '{{route('product.index')}}';

        $(document).on('click','.category-filter',function(){
            var checkValue = $(this).prop('checked');
            if(checkValue){
                arrParam.push($(this).attr('data-name'));
                arrCateIdParam.push($(this).val())
            }else{
                var categoryIndexToRemove = arrParam.indexOf($(this).attr('data-name'))
                arrParam.splice(categoryIndexToRemove, 1);
                arrCateIdParam.splice(categoryIndexToRemove,1);
            }

            if(arrParam.length > 0){
                url = removeParam('category', url);

                if(url.indexOf("?") > 0){
                    var filterWithCate = "&category=" + arrParam.join(',');
                }else{
                    var filterWithCate = "?category=" + arrParam.join(',');
                }
                url = url + filterWithCate;
            }else{
                url = removeParam('category', url);
            }
            //Renew param
            window.history.pushState(null, null, url);

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: 'GET',
                url: '{{route('product.index.ajax')}}',
                data: {
                    category_id: arrCateIdParam,
                },
                success: function(response) {
                    // console.log(response)
                    $('.product-main').html('');
                    $('.product-main').append(response);
                    window.history.pushState(null, null, url);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })

        $(document).on('click','.brand-filter',function(){
   
            var checkValue = $(this).prop('checked');
            if(checkValue){
                arrBrandParam.push($(this).attr('data-name'));
                arrBrandIdParam.push($(this).val())
            }else{
                var categoryIndexToRemove = arrBrandParam.indexOf($(this).attr('data-name'))
                arrBrandParam.splice(categoryIndexToRemove, 1);
                arrBrandIdParam.splice(categoryIndexToRemove,1);
            }

            if(arrBrandParam.length > 0){
                url = removeParam('brand', url);
                
                if(url.indexOf("?") > 0){
                    var filterWithCate = "&brand=" + arrBrandParam.join(',');
                }else{
                    var filterWithCate = "?brand=" + arrBrandParam.join(',');
                }
                
                url = url + filterWithCate;
            }else{
                url = removeParam('brand', url);
            }

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: 'GET',
                url: '{{route('product.index.ajax')}}',
                data: {
                    brand_id: arrBrandIdParam,
                },
                success: function(response) {
                    $('.product-main').html('');
                    $('.product-main').append(response);
                    window.history.pushState(null, null, url);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })

        $(document).on('click', '#selectPriceRange', function(){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: 'GET',
                url: '{{route('product.index.ajax')}}',
                data: {
                    min_price: $('#minPrice').val(),
                    max_price: $('#maxPrice').val()
                },
                success: function(response) {
                    // console.log(response)
                    $('.product-main').html('');
                    $('.product-main').append(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })

        $(document).on('click', '#sortAmount', function(){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: 'GET',
                url: '{{route('product.index.ajax')}}',
                data: {
                    sort_amount: 'true',
                },
                success: function(response) {
                    // console.log(response)
                    $('.product-main').html('');
                    $('.product-main').append(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })

        $(document).on('change', '#sortPrice', function(){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: 'GET',
                url: '{{route('product.index.ajax')}}',
                data: {
                    sort_price: $(this).val(),
                },
                success: function(response) {
                    // console.log(response)
                    $('.product-main').html('');
                    $('.product-main').append(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })

        function addProductToCart(product_id){
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('product.cart.store')}}',
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: product_id,
                },
                dataType:'json',
                success: function(response) {
                    toastr.success(response.message);
                },
                error: function(error) {
                    console.log(error.responseJSON.message)
                    toastr.error(error.responseJSON.message);
                }
            });
        }

        function removeParam(key, sourceURL) {
            var rtn = sourceURL.split("?")[0],
                param,
                params_arr = [],
                queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
            if (queryString !== "") {
                params_arr = queryString.split("&");
                for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                    param = params_arr[i].split("=")[0];
                    if (param === key) {
                        params_arr.splice(i, 1);
                    }
                }
                if (params_arr.length) rtn = rtn + "?" + params_arr.join("&");
            }
            return rtn;
        }
    </script>
@endsection
