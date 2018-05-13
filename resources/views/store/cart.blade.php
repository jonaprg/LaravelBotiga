@extends ('store.template')
@section ('content')

<div id="cart" class ="col-md-12">
    @if(count($cart))
    <div class="product-info">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Imatge</th>
                    <th scope="col">Producte</th>
                    <th scope="col">Preu</th>
                    <th scope="col">Quantitat</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

           @foreach($cart as $item) 
                <tr>       
                    <td><img src="{{ $item->image }}" width="100"></td>
                    <td>{{ $item->name }} </td>
                    <td>{{ number_format($item->price,2) }}€</td>
                    <td>
                        <input type="number" min="1" max="100" value="{{ $item->quantity }}" id ="product_{{$item->id}}" class="quantitat">                        
                    </td>
                    <td>{{ number_format($item->price * $item->quantity,2) }} €</td>
                    <td>
                        <a href="{{route('cart-delete', $item->slug)}}" class="btn btn-danger">
                            <i class="fa fa-remove"></i>
                        </a>
                        <a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('cart-update', $item->slug) }}" data-id = "{{ $item->id }}">
                            <i class="fa fa-refresh"></i>
                        </a>
                    </td>
                </tr>
            @endforeach 
                <tr>                      
                    <td> 
                        <a href="{{route("order-detail")}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i> Continue</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> <span class="btn btn-secondary">{{$total}} € </span></td>
                    <td> 
                        <a href="{{route('cart-trash')}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>  
                    </td>
                </tr>
            </tbody>
            
        </table>

       
    </div>
    @else
        <div class="product-info">
            <h3><span class="label label-danger">La cistella està buida</span></h3>
        </div>
    @endif
</div>

@stop