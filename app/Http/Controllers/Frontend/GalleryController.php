<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Post;
use App\Models\Category;
use App\Models\PrintMaterial;
use App\Models\PrintType;
use App\Models\Size;
use App\Models\CarouselRow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $title = "Artiliser | Gallery";
        $categories = Category::where('id', '!=', 1)->get();
        //Random Post
        $gallery = Post::inRandomOrder()
                     ->where('carousel_rows_id', 3)
                     ->where('categories_id', '!=', 1)
                    //  ->take()
                     ->get();
                   
        // //Normal
        // $gallery = Post::inRandomOrder()
        //              ->where('carousel_rows_id', 3)
        //              ->where('categories_id', '!=', 1)
        //              ->get();
        return view('frontend.gallery.index',  compact('gallery', 'categories', 'title'));
    }
    public function getCategory($id){
        $title = "Artiliser | Gallery";
        $categories = Category::where('id', '!=', 1)->get();
        $posts = Post::find($id);
        
        $gallery = Post::inRandomOrder()
                     ->where('carousel_rows_id', 3)
                     ->where('categories_id', $id)
                    //  ->take()
                     ->get();
        return view('frontend.gallery.index-cat',  compact('posts', 'gallery', 'title', 'categories'));
    }

    public function search(Request $request){
        $title = "Artiliser | Gallery";
        $categories = Category::where('id', '!=', 1)->get();
        $gallery = Post::where('carousel_rows_id', 3)
                     ->where('categories_id', '!=', 1)
                    //  ->take()
                     ->get();

        $search = $request->input('search');

        $gallery = Post::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        return view('frontend.gallery.index-search', compact('gallery','title', 'categories'));
    }

    public function detail($id){
        // $categories = Category::where('id', '!=', 1)->get();
      
        $data = Post::find($id);
        $title = 'Artiliser | '. $data->name;
        $printmaterials = PrintMaterial::all();
        $printtypes = PrintType::all();
        $sizes = Size::all();
        $categories = Category::all();
        
        $gallery = Post::where('carousel_rows_id', 3)
                        ->where('categories_id', '!=', 1)
                        ->where('categories_id', $data->categories->id)
                        ->where('id', '!=', $data ->id)
                        ->take(3)
                        ->get();

        if($data->categories->id == 1){
            return view('frontend.gallery.detail-news', compact('data', 'gallery',  'printmaterials', 'printtypes', 'sizes', 'categories', 'title'));
        }else{
            return view('frontend.gallery.detail', compact('data', 'gallery',  'printmaterials', 'printtypes', 'sizes', 'categories', 'title'));
        }
    
    }

    public function order(){
        return view('frontend.gallery.order-detail');
    }
    public function success(){
        return view('frontend.gallery.success');
    }
    public function error(){
        return view('frontend.gallery.error');
    }
}