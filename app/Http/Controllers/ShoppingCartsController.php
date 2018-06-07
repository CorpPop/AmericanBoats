<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShoppingCart;
use App\PayPal;
use App\Tiket;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderCreated;
// use App\Product;

class ShoppingCartsController extends Controller
{
    public function __construct(){
        $this->middleware("shoppingcart");
    }
    public function index(Request $request){
        // dd($request);
        // Mail::to("rider_jacr@hotmail.com")->send(new OrderCreated());
        $shopping_cart = $request->shopping_cart;
        // dd($shopping_cart);
    	// $shopping_cart_id = \Session::get('shopping_cart_id');
     //    $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        // $paypal = new PayPal($shopping_cart);
        // $payment = $paypal->generate();
       // dd($shopping_cart);

        // return redirect($payment->getApprovalLink());

        $products = $shopping_cart->products()->get();
        // dd($products);
        $total = $shopping_cart->total();
        $nuevo=DB::select("SELECT * FROM products limit 1,3 ");
        $warehouse= DB::select("SELECT * FROM warehouses,products WHERE products.id=warehouses.id_warehouse");
        return view('shopping_carts.index',['products' => $products,'total' => $total,'warehouse' => $warehouse,'nuevo'=>$nuevo]);
    }
    public function checkout(Request $request){
        $shopping_cart = $request->shopping_cart;
        // dd($shopping_cart);
        $paypal = new PayPal($shopping_cart);
        // dd();
        $payment = $paypal->generate();
       // dd($shopping_cart);

        return redirect($payment->getApprovalLink());
    }
     public function checktiket(Request $request){
        $tiket = new Tiket();
        $tiket->id = null;
        $tiket->id_user = Auth::user()->id;
        $tiket->cantidad = $request->cantidad;
        $tiket->descripcion = $request->descripcion;
        $tiket->talla = $request->talla;
        // dd($tiket);
        if ($tiket->save()) {
            return redirect(checkout());
        }
        // dd($tiket);
    }
    public function show($id){
        $shopping_cart = ShoppingCart::where('customid',$id)->first();

        $order = $shopping_cart->order();

        return view("shopping_carts.completed",["shopping_cart" => $shopping_cart, "order" =>$order]);
    }
}
