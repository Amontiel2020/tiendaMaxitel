@extends('layouts.template')

@section('contenido')
<div class="container text-center"> 
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1>
    </div>

<div class="table-cart">
  @if(count($cart))
  <p>
  	<a href="{{ route('cart-trash') }}" class="btn btn-danger">
  		Vaciar carrito <i class="fa fa-trash"></i>
  	</a>
  </p>
  <div class="table-responsive">
 <table class="table table-striped table-hover table-bordered">
  	<thead>
  			<tr>
  			<th>Imagen</th>
  			<th>Producto</th>
  			<th>Precio</th>
  			<th>Cantidad</th>
  			<th>Subtotal</th>
  			<th>Quitar</th>
  			</tr>

  	</thead>
  	<tbody>
  			@foreach($cart as $item)
  		<tr>
  			<td><img src="{{asset($item->imagem)}}" width="50"></td>
  			<td>{{$item->nome}}</td>
  			<td>${{number_format($item->precio,2)}}</td>
  			<td>
  				<input 
  				      type="number" 
  				      min="1"
                      max="100"
                      value="{{$item->cantidad}}"
                      id="producto_{{$item->slug}}" 
  				      >
                      <a href="#" 
                      class="btn btn-warning btn-update-item"
                      data-href="http://localhost:8000/cart/update"
                      data-id="{{$item->slug}}"

                      >
                      	<i class="fa fa-refresh"></i>
                      </a>
  			</td>
  			<td>${{number_format($item->precio*$item->cantidad,2)}}</td>
  			<td>
  				<a href="{{ route('cart-delete',$item->slug) }}" class="btn btn-danger">
  					<i class="fa fa-remove"></i>
  				</a>
  			</td>
  		</tr>
  			@endforeach

  		</tbody>
  	</table>
         <h3>
         	<span class="label label-success">
         		Total:${{number_format($total,2)}}
         	</span>
         </h3>
  </div>
  @else
  <h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
  @endif
  <hr>

  <a href="{{ route('home2') }}" class="btn btn-primary">
  	<i class="fa fa-shevron-circle-left"></i>Seguir comprando
  </a>
    <a href="#" class="btn btn-primary">
  	Continuar<i class="fa fa-shevron-circle-right"></i>
  </a>
</div>
</div>


@stop
