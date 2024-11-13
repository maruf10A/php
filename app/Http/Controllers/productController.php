<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\frontendController;

class productController extends Controller
{

    public function create()
    {
        return view('backend.page.create');
    }
    public function index(){
        $products = product::all();
        return view('backend.page.store',compact('products'));
    }

    public function store(Request $request)
    {
        $product = new product();
        if(isset($request->image)){
            $productImage = time().'.'.$request->image->extension();
            $productpath = public_path('backend/assets/img');
            $request->image->move($productpath, $productImage);
            $product->image = $productImage;
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        if(isset($request->image)){
            $productImage = time().'.'.$request->image->extension();
            $productpath = public_path('backend/assets/img');
            $request->image->move($productpath, $productImage);
            $product->image = $productImage;
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->back();
    }
    public function edit($id){
        $products = Product::find($id);
        return view('backend.page.edit',compact('products'));
    }
    public function delete($id){
        $products = Product::find($id);
        $products->delete();
        return redirect()->back();
    }

}



