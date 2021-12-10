<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = "Artiliser | About";
        $data = About::all();
        return view('frontend.about.index', compact('data', 'title'));
    }
}