<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view("products.index", ["products"=> $products]);
    }

    public function create(){
        return view("products.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "name"=> "required",
            "price"=> "required|decimal:2",
            "description" => "nullable"
        ]);

        $product = Product::create($data);

        return redirect(route('product.index'));
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success','Product Deleted');
    }
}
