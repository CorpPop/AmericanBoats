<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        // $this->middleware("auth",["except" => "show"]);
    }
    public function index()
    {
        $products = Product::all();
        return view("products.index",["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;

        return view("products.create",["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        $hasFile2 = $request->hasFile('cover2') && $request->cover2->isValid();
        $hasFile3 = $request->hasFile('cover3') && $request->cover2->isValid();
        $hasFile4 = $request->hasFile('cover4') && $request->cover2->isValid();
        $product = new Product;
        $product->id = null;
        $product->user_id = Auth::user()->id;
        $product->title = $request->title;
        $product->description = $request->description;       
        $product->pricing = $request->pricing;
        $extension2 = $request->cover2->extension();
        $product->extension2 = $extension2;
        $extension3 = $request->cover3->extension();
        $product->extension3 = $extension3;
        $extension4 = $request->cover4->extension();
        $product->extension4 = $extension4;

        if ($hasFile) {
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }
        if($product->save()){
            if($hasFile){
                $request->cover->storeAs('images',"$product->id.$extension");
                $request->cover2->storeAs('images',"$product->id.a.$extension");
                $request->cover3->storeAs('images',"$product->id.b.$extension");
                $request->cover4->storeAs('images',"$product->id.c.$extension");
            }
            return redirect("/catalogo");
            // return view("products.create");
        }else{
            return view("products.create",["product" => $product]);
            // return redirect("/products");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view("products.edit",["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        // $product->id = null;
        // $product->user_id = Auth::user()->id;
        $product->title = $request->title;
        $product->description = $request->description;       
        $product->pricing = $request->pricing;

        if($product->save()){
            return redirect("/products");
            // return view("products.create");
        }else{
            return view("products.edit",["product" => $product]);
            // return redirect("/products");
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/products');
    }
}
