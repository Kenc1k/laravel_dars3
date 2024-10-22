<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category(){
        return view('category');
    }
    public function post(){
        return view('post');
    }
    public function comment(){
        return view('comment');
    }
    public function order(){
        return view('order');
    }
    public function product(){
        return view('product');
    }
}
