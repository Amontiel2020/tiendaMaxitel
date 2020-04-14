@extends('layouts.template')

@section('contenido')

<br>
<div class="container-fluid"align="center">
    <div class="babylongrid">
        
    
    
    <div class="row">
        @foreach($productos as $producto)
   
        <div class="col-md-3">
         <article>
             <div class="h3 title">{{$producto->nome}}</div>
             

             <div class="desc">
                <img src="{{$producto->imagem}}" width="250">
                <p>{{$producto->extract}}</p>
                <h3><span class="label label-success">Precio:${{number_format($producto->precio,2)}}</span></h3>
             
                <p>
                   <a class="btn btn-warning" href="{{route('cart-add',$producto->slug)}}">
                    <i class="fa fa-shopping-cart"></i> La quiero</a>
                   <a class="btn btn-primary" href="{{route('producto-detalhe',$producto->slug)}}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>

                </p>
            </div>
        </article>
        </div> 
    
         @endforeach 
    </div>    
      </div> 
</div>






@stop