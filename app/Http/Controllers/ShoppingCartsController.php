<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use App\PayPal;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;

class ShoppingCartsController extends Controller
{
    public function __construct(){
        $this->middleware("shoppingcart");
    }
    public function index(Request $request){
        
        // Mail::to("yessicaforez@gmail.com")->send(new OrderCreated());
        $shopping_cart = $request->shopping_cart;
    	// $shopping_cart_id = \Session::get('shopping_cart_id');
     //    $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        // $paypal = new PayPal($shopping_cart);
        // $payment = $paypal->generate();
       // dd("ok");

        // return redirect($payment->getApprovalLink());
        $products = $shopping_cart->products()->get();
        $total = $shopping_cart->total();

        return view('shopping_carts.index',['products' => $products,'total' => $total]);
    }
    public function show($id){
        $shopping_cart = ShoppingCart::where('customid',$id)->first();

        $order = $shopping_cart->order();

        return view("shopping_carts.completed",["shopping_cart" => $shopping_cart, "order" =>$order]);
    }
}
