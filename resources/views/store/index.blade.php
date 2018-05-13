@extends ('store.template')
@section ('content')
@include ('store.partials.slider')
<div class="col-md-6 col-lg-6 col-xs-7">
    <div class="input-group">
        <input id="search" name="search" placeholder="Search" class="input-sm form-control" type="text"> 
    </div>
</div>
<div id="products"> <!-- class="products" -->
    <!--@foreach($products as $product)
        <div class="product white-panel">
            <h3>{{$product->name}}</h3>
            <img src="{{$product->image}}" alt="">
            <div class="product-info panel">
                <p>{{$product->extract}}</p>
                <h4><span>Preu: {{number_format($product->price,2)}}</span>€</h4>
                <p>
                    
                    <a class="btn btn-warning" href="{{route('cart-add', $product->slug)}}">
                        Comprar
                    </a>
                    <a class="btn btn-primary" href="{{route('product-detail', $product->slug)}}">
                        <i class="fa fa-chevron-circle-right"></i> Detall
                    </a>
                </p>
            </div>
        </div>
    @endforeach-->
</div>
@stop