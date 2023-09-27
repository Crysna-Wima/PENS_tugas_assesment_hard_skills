<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingController extends Controller
{
    public function index() {
        $data['featured'] = Product::with('kategori')->where('status_product', 'aktif')->orderBy('created_at', 'desc')->paginate(4);
        $data['products'] = Product::with('kategori')->where('status_product', 'aktif')->orderBy('id', 'desc')->paginate(8);
        return view('landing.index', $data);
    }
    
}
