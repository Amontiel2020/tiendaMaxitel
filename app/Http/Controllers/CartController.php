<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CartController extends Controller
{

     public function __construct(){
     	if (!\Session::has('cart')) {
     		\Session::put('cart',array());
     	}

     }

    //show cart
     public function show(){
     	$cart=\Session::get('cart');
     	$total=$this->total();
     	return view('Application.cart',compact('cart','total'));
     }

    //add item
     public function add(Producto $producto){
         $cart=\Session::get('cart');
         $producto->cantidad=1;
         $cart[$producto->slug]=$producto;
         \Session::put('cart',$cart);
         return redirect()->route('cart-show');
     }

    //delete item
    public function delete(Producto $producto){
    	$cart=\Session::get('cart');
    	unset($cart[$producto->slug]);
    	\Session::put('cart',$cart);

       return redirect()->route('cart-show');

    }

    //update item
    public function update(Producto $product,$cantidad){
    	$cart=\Session::get('cart');
    	$cart[$product->slug]->cantidad=$cantidad;

    	\Session::put('cart',$cart);

       return redirect()->route('cart-show');

    }

    //trash cart

    public function trash(){
    	\Session::forget('cart');
    	return redirect()->route('cart-show');
    }

    //total
    private function total(){
    	$cart=\Session::get('cart');
        $total=0;
    	foreach($cart as $item){
    		$total+=$item->precio*$item->cantidad;

    	}
    	return $total;
    }







}
