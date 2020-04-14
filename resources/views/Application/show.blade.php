@extends('layouts.template')

@section('contenido')
<div class="container text-center"> 
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i>Detalle del producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="producto-block">
            <img src="{{asset($producto->imagem)}}" width="250">     
      </div>
        </div>
        <div class="col-md-6">
            <div class="producto-block">
            <h3>{{$producto->nombre}}</h3><hr>

            <div class="produto-info panel">
              <p>{{$producto->descricao}}</p>
              <h3>
                <span class="label label-success">Precio: ${{number_format($producto->precio,2)}}</span>
              </h3>
            </div>
            <p>
              <a class="btn btn-warning btn-block" href="{{route('cart-add',$producto->slug)}}">La quiero <i class="fa fa-shopping-cart fa-2x"></i></a>
            </p>

      </div> 
        </div>
    </div>
    <hr>

      <p>
        <a class="btn btn-primary" href="{{route('home2')}}">
          <i class="fa fa-chevron-circle-left"></i> Regresar</a>
      </p>

</div>


@stop