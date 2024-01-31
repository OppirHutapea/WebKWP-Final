<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Document;
use App\Models\Panitia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class HomePageController extends Controller
{
    public function index()
    {
        $beritausers = Berita::latest()->take(4)->get();
        $panitias = Panitia::get();
        $document = Document::get();
        return view('user.homepage', compact('beritausers', 'panitias','document'));
    }
}
