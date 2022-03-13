<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['USB', 'SSD', 'Disco duro'];
        $categories = ['Almacenamiento', 'Monitores', 'Accesorios'];

        //return view('products/index')->with('products', $products)->with('categories', $categories);
        return view('products/index', compact('products', 'categories'));
        //return view('products/index', $products);
    }
}
