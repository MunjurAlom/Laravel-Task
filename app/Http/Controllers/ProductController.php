<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    public function productAdd(){      
   return view('product.product_add');
}


    public function productView(){

    $products = Product::all();

    $products = Product::simplePaginate(4);

   return view('product.product_view', compact('products'));
}


public function storeData(Request $request){

    $rules= [
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
    ];

    $this->validate($request, $rules);

    // insert data object
    $product = new Product();

    $product->name = $request->name;
    $product->quantity = $request->quantity;
    $product->price = $request->price;
    $product->save();
    return redirect('/dashboard');
}

public function productEdit($id){

    $products = Product::find($id);
   return view('product.product_edit', compact('products'));
}

public function productUpdate(Request $request,$id){
 
    Product::find($id)->update([
        'name'=>$request->name,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
    ]);
    return redirect()->route('product.view');
   }
   
   public function productDelete($id){
       
    Product::findOrFail($id)->delete();
     return redirect()->back();

}

}
