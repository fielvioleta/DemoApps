<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
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
        $this->route_name = Route::currentRouteName();
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
            'route_name' => $this->route_name,
        ]);
    }

    /**
     * Display the categories
     * @param  category_id int
     * @return \Illuminate\Http\Response
     */
    public function categories(Request $request) {
        $category_id = $request->id;

        return view('guest.categories', [
            'categories' => $this->categories,
            'products' => $this->products,
            'route_name' => $this->route_name,
        ]);
    }

    /**
     * Display the product detail
     * @param  $product_id int
     * @return \Illuminate\Http\Response
     */
    public function productDetail(Request $request) {
        $product_id = $request->id;
        $product = Product::find($product_id);

        return view('guest.product-detail', [
            'categories' => $this->categories,
            'product' => $product,
            'route_name' => $this->route_name,
        ]);
    }
    
    /**
     * Display cart details
     *
     * @return \Illuminate\Http\Response
     */
    public function cart() {
        return view('guest.cart', [
            'categories' => $this->categories,
            'route_name' => $this->route_name,
        ]);
    }

    /**
     * Display wishlist details
     *
     * @return \Illuminate\Http\Response
     */
    public function wishlist() {
        return view('guest.wishlist', [
            'categories' => $this->categories,
            'route_name' => $this->route_name,
        ]);
    }

    /**
     * Display checkout details
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout() {
        return view('guest.checkout', [
            'categories' => $this->categories,
            'route_name' => $this->route_name,
        ]);
    }
}
