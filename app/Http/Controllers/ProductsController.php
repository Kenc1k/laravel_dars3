<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use App\Models\Product; 
use App\Models\Post; 
use App\Models\Comment;
use App\Models\Order;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category()
    {
        $categories = Category::all(); 
        return view('category', compact('categories'));
    }

    public function post()
    {
        $posts = Post::all();
        return view('post.index', compact('posts')); 
    }

    public function comment()
    {
        $comments = Comment::all(); 
        return view('comment.index', compact('comments')); 
    }

    public function order()
    {
        $orders = Order::all(); 
        return view('order.index', compact('orders'));
    }

    public function product()
    {
        $products = Product::all(); 
        return view('product.index', compact('products')); 
    }
}
