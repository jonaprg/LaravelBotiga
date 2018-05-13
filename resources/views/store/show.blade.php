@extends ('store.template')
@section ('content')
<div class="row product">
    <div class ="col-md-6 col-xs-12">
        <div class="product-block">
            <img src="{{$product->image}}" width="300">
        </div>  
    </div>
    <div class ="col-md-6 col-xs-12">
        <div class="product-info">
            <h3>{{$product->name}}</h3><hr>
            <p>{{$product->description}}</p>
            <p>Preu: {{number_format($product->price, 2)}}</p>
            <p>
                @if(Auth::check())
                <a class="btn btn-warning btn-block" href="{{route('cart-add', $product->slug)}}">Comprar 
                    <i class="fa fa-cart-plus "></i>
                </a>
                @endif
                <!--
                <p>
                    <a class="btn btn-primary" href="{{route('home')}}">
                        <i class ="fa fa-chevron-circle-right"></i> Tornar Inici
                    </a>
                </p>-->
            </p>
        </div>
    </div>
    <div class ="col-md-12">
        <div class="product-info">
            <h3>Specs</h3><hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Lorem ipsum</th>
                        <th scope="col">Lorem ipsum</th>
                        <th scope="col">Lorem ipsum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>       
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                    </tr>
                    <tr>         
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                        <td>Lorem ipsum</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
