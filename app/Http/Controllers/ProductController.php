<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return 'This page shows the list of products FROM CONTOLLER.';
    }

    public function create(){
        return 'Show the form to create a product. FROM CONTOLLER.';
    }

    public function store(){
        //
    }

    public function show($product){
        return "This is product number {$product} FROM CONTROLLER.";
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
