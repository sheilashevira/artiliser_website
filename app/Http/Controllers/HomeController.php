<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\PrintMaterial;
use App\Models\PrintType;
use App\Models\CarouselRow;
use App\Models\Size;
use App\Models\About;
use App\Models\User;

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
        $title = "Artiliser";
        $crOne = Post::where('carousel_rows_id', 1)
                     ->take(5)
                     ->get();

        $crTwo = Post::where('carousel_rows_id', 2)
                     ->take(5)
                     ->get();

        $gallery = Post::where('categories_id', '!=', 1)
                    //  ->take(3)
                     ->get();

        return view('dashboard', compact('crOne', 'crTwo', 'gallery', 'title'));
    }

    public function error404()
    {
        return view('page-not-found');
    }

    public function dashboard()
    {
        $title = "Dashboard";
        $posts = Post::count();
        $categories = Category::count();
        $printmaterials = PrintMaterial::count();
        $printtypes = PrintType::count();
        $carouselrows = CarouselRow::count();
        $sizes = Size::count();
        $abouts = About::count();
        $users = User::count();
        return view('backend.dashboard', compact('title','posts', 
        'categories', 'printmaterials', 'printtypes', 
        'carouselrows', 'sizes', 'abouts', 'users'));
    }
}