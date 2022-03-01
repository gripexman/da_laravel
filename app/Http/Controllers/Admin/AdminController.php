<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\InvoiceInput;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $prodcount = DB::table('products')->count();
        $usercount = User::count();
        $catecount = Category::count();
        $invinput = InvoiceInput::count();
        return view('admin.dashboard',compact('prodcount','usercount','invinput','catecount'));
    }
}