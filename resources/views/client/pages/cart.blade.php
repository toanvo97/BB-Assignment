@extends('client.master.master')

@section('title','Giỏ hàng')

{{-- @section('css')
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/css/style.css')}}" type="text/css">
@endsection --}}

@section('header')
    @include('client.layout.header')
@endsection

@section('main')
    <div class="product-item">
        <table>
            <thead>
                <tr role="row">
                    <th>#</th>
                    <th>{{ __('Product name') }}</th>
                    <th>{{ __('Quantity') }}</th>
                    {{-- @if(Sentinel::getUser()->hasAccess(['pages_write']) || Sentinel::getUser()->hasAccess(['pages_delete']) ) --}}
                        <th>{{ __('options') }}</th>
                    {{-- @endif --}}
                </tr>
            </thead>
            <tbody>
                <tr role="row">
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
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
