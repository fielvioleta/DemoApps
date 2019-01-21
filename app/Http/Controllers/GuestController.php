<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::all('id', 'name', 'image_path');
        $this->products = Product::all();
    }

    /**
     * Display the index view for guest
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('guest.index', [
            'categories' => $this->categories,
            'products' => $this->products,
        ]);
    }

    /**
     * Display the categories
     *
     * @return \Illuminate\Http\Response
     */
    public function categories(Request $request) {
        $category_id = $request->id;

        return view('guest.categories', [
            'categories' => $this->categories,
            'products' => $this->products,
        ]);
    }
}