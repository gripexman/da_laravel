<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('products')->get();
        return view('users.home.welcome', ['data' => $data]);
    }
    public function productdetail($sp)
    {
        if (Product::where('id',$sp)->exists()) {
            $data = Product::where('id',$sp)->get();
            return view('users.home.productdetail', compact('data'));
        }
    }
}
