<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    public function index(){
    	$products = Product::orderBy('id','desc')->paginate();
    	return view('shop.index',compact('products'));
    }

    public function show($id){
    	$product = Product::findOrFail($id);
    	return view('shop.view',compact('product'));
    }
}
