<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Display the index view for guest
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('guest.index');
    }
}
