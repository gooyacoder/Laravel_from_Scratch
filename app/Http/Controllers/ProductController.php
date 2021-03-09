<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        //$products = DB::table('products')->get();
        $products = Product::all();

        dd($products);

        return view('products.index');
    }

    public function create(){
        return 'Show the form to create a product. FROM CONTOLLER.';
    }

    public function store(){
        //
    }

    public function show($product){
        // $result = DB::table('products')->find($product);
        $result = Product::findOrFail($product);
        dd($result);
        return view('products.show');
    }

    public function edit($product){
        return 'Show the form to edit product number ' . $product . '.';
    }

    public function update($product){
        //
    }

    public function destroy($product){
        //
    }
}
