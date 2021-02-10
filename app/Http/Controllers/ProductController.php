<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return 'Show the form to create a product. FROM CONTOLLER.';
    }

    public function store(){
        //
    }

    public function show($product){
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
