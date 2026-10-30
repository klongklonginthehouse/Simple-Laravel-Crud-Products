<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
   public function index()
   {
        $products = Product::all();
       return view('products.index' , ['products' => $products
       ]);
       
   }
   public function create()
   {
       return view('products.create');
   }
   public function store(Request $request)
   {
       $data = $request->validate([
           'name' => 'required',
           'description' => 'nullable',
           'qty' => 'required|integer',
           'price' => 'required|numeric:2',
       ]);

       $oneproduct = Product::create($data);
       return redirect()->route('products.index')->with('success', 'Product created successfully.');

   
}

public function edit(Product $product){
    
    return view('products.edit', ['product' => $product]);
}

public function update(Request $request, Product $product)
{
    $data = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'qty' => 'required|integer',
        'price' => 'required|numeric:2',
    ]);

    $product->update($data);

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}
public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');

}
}