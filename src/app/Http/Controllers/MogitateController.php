<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;

class MogitateController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('products',['products'=>$products]);
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function search(Request $request)
    {
        $products = $request->input('input');

        $query = Post::query();

        if(!empty($products)) {
            $query=Product::where('name', 'LIKE', "%{$request->input}%");
        }

        $posts = $query->get();

        return view('search', compact('posts', 'input'));

    }

}
