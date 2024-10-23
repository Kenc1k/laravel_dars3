<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Method to return the category view
    public function category()
    {
        return view('category');
    }

    // Method to return the post view
    public function post()
    {
        return view('post');
    }

    // Method to return the comment view
    public function comment()
    {
        return view('comment');
    }

    // Method to return the order view
    public function order()
    {
        return view('order');
    }

    // Method to return the product view with products data
    public function product()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('product', compact('products')); // Pass the products to the view
    }
}
