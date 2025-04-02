<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;
class FrontController extends Controller
{
    public function index(Request $request )
    {
        if($request->has('category_id') && $request->category_id != '')
        {
            $products = Product::where('category_id', $request->category_id)->paginate(9);
        }
        else {  $products = Product::paginate(9);}

        $categories = Category::all();
        return view('home.index', compact('products','categories'));
    }
}
