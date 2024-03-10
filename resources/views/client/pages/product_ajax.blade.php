<div class="row">
    @foreach ($products as $product)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="product__item">
            {{-- @dd(asset($product->images)) --}}
            <div class="product__item__pic set-bg" data-setbg="{{asset($product->images)}}" style="background-image: url({{asset($product->images)}})">
                <ul class="product__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product__item__text"
            >
                <span>{{ $product->categories()->first()->name }} - Brand: {{$product->brand->name}}</span>
                <h6 style="font-weight: 600;"><a href="#">{{ $product->name }}</a></h6>
                <p>Left: {{$product->quantity}}</p>
                <h5>${{$product->price}}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{-- <div class="product__pagination">
    @if ($products->lastPage() > 1)
    <ul class="pagination">
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $products->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
    </ul>
    @endif                                    
</div> --}}