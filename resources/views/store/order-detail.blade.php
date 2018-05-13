@section('content')
@extends('store.template')

@if(Auth::check())
<div class ="col-md-12">
    <div id="order-detail">
        <h2>Detall de la compra</h2><hr>
        <table class="table table-striped">
            <h3>Detall del Usuari</h3>
            <tbody>
                <tr>       
                    <td>Nom: </td>
                    <td>{{Auth::user()->name . " " . Auth::user()->last_name}}</td>
                </tr>
                <tr>         
                    <td>Correu</td>
                    <td>{{Auth::user()->user}}</td>
                </tr>
                <tr>
                    <td>Adreça</td>
                    <td>{{Auth::user()->address}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
        <h3>Detall de la comanda</h3>
        <thead class="thead-light">
                <tr>
                  <th scope="col">Producte</th>
                  <th scope="col">Preu</th>
                  <th scope="col">Quantitat</th>
                  <th scope="col">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cart as $item) 
                <tr>       
                    <td>{{ $item->name }} </td>
                    <td>{{ number_format($item->price,2) }}€</td>
                    <td>{{ $item->quantity }} </td>
                    <td>{{ number_format($item->price * $item->quantity,2) }} €</td>
                </tr>
                @endforeach
                <tr>                      
                    <td> 
                        <a href="{{route("cart-show")}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Tornar</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td><span class="btn btn-secondary">{{$total}} € </span> </td>
                </tr>
                <tr>                      
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-cc-paypal fa-2x"></i> </a></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>
@endif
@stop