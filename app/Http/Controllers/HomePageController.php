<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $beritausers = Berita::latest()->take(4)->get();
        return view('user.homepage', compact('beritausers'));
    }
    
}
