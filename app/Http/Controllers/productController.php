<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    public function productAdd(Request $request){

        $product = new product;

        $product->name = $request->name;
        $product->discription = $request->discription;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();

        return redirect()->back();
        //dd($request->all());
    }
}
