<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('promotepage.index');
    }

    public function shop()
    {
        return view('promotepage.shop');
    }

    public function blog()
    {
        return view('promotepage.blog');
    }
    public function contact()
    {
        return view('promotepage.contact');
    }
    public function admin(){
        return view('admin.index');
    }
}