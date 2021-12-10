<?php

namespace App\Http\Controllers\Backend;
use App\Models\Post;
use App\Models\Category;
use App\Models\PrintMaterial;
use App\Models\PrintType;
use App\Models\CarouselRow;
use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(){
        $posts = Post::with('categories', 'print_materials', 'print_types', 'carousel_rows', 'sizes')->get();
        $title = "Posts";
        return view('backend.post.index', compact('posts', 'title'));
    }

    public function add()
    {
        $posts = Post::all();
        $categories = Category::all();
        $printmaterials = PrintMaterial::all();
        $printtypes = PrintType::all();
        $carouselrows = CarouselRow::all();
        $sizes = Size::all();
        $title = "Add Post";
        return view('backend.post.add', compact('posts', 'categories', 'printmaterials', 'printtypes', 'carouselrows', 'sizes', 'title'));
    }


    public function insert(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'categories_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            // 'price' => 'numeric',
            // 'print_materials_id' => 'required',
            // 'print_types_id' => 'required',
            // 'sizes_id' => 'required',
            'carousel_rows_id' => 'required',
            
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            $input['image'] = "$filename";
        }
    
        Post::create([
            'name' => $request->name,
            'categories_id' => $request->categories_id,
            'image' => $filename,
            'content' => $request->content,
            'price' => $request->price,
            'print_types_id' => $request->print_types_id,
            'print_materials_id' => $request->print_materials_id,
            'sizes_id' => $request->sizes_id,
            'carousel_rows_id' => $request->carousel_rows_id,
        ]);
     
        return redirect()->route('post')
                        ->with('success','Post created successfully.');
    }
        
    public function edit($id)
    {
        $posts = Post::find($id);
        $categories = Category::all();
        $printmaterials = PrintMaterial::all();
        $printtypes = PrintType::all();
        $carouselrows = CarouselRow::all();
        $sizes = Size::all();
        $title = "Edit Post";
        if($posts->categories->id == 1){
            return view('backend.post.edit-news', compact('posts', 'categories', 'printmaterials', 'printtypes', 'carouselrows', 'sizes', 'title'));
        }else{
            return view('backend.post.edit', compact('posts', 'categories', 'printmaterials', 'printtypes', 'carouselrows', 'sizes', 'title'));
        }
    }

    public function update(Request $request, $id)
    {   
        $request->validate([
            'name' => 'required',
            'categories_id' => 'required',
            'content' => 'required',
            'carousel_rows_id' => 'required',
            // 'price' => 'required',
            // 'print_materials_id' => 'required',
            // 'print_types_id' => 'required',
            // 'sizes_id' => 'required',
            'image' => 'max:1024',
           
        ]);
        
        if (Request()->image <>""){
            $posts = Post::find($id);
            $path = 'img/'. $posts->image;
            if ($posts-> image <> ""){
                unlink($path);
            }

            $image = Request()->file('image');
            $destinationPath = 'img/';
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename); 
            $data=[
                'name' => Request()->name,
                'categories_id' => Request()->categories_id,
                'content' => Request()->content,
                'carousel_rows_id' => Request()->carousel_rows_id,
                'print_materials_id' => Request()->print_materials_id,
                'print_types_id' => Request()->print_types_id,
                'sizes_id' => Request()->sizes_id,
                'price' => Request()->price,
                'image' => $filename,
            ];
            $posts->update($data);
        }else {
            //jika tidak ganti foto
            $posts = Post::find($id);
            $data=[
                'name' => Request()->name,
                'categories_id' => Request()->categories_id,
                'content' => Request()->content,
                'carousel_rows_id' => Request()->carousel_rows_id,
                'print_materials_id' => Request()->print_materials_id,
                'print_types_id' => Request()->print_types_id,
                'sizes_id' => Request()->sizes_id,
                'price' => Request()->price,
            ];
            $posts->update($data);
        }
    
        return redirect()->route('post')
                        ->with('success','Post updated successfully');
    }

    public function read($id)
    {
        $data = Post::find($id);
        $title = "Detail Post";
        if($data->categories->id == 1){
            return view('backend.post.read-news', compact('data', 'title'));
        }else{
            return view('backend.post.read', compact('data', 'title'));
        }
    }

    public function delete($id)
    {
        $data = Post::find($id); 
        $path = 'img/'. $data->image;
        if(file_exists($path)){
            unlink($path);
        }

        $data->delete();
        return redirect()->route('post')
            ->with('success', 'Post deleted successfully');
    }
}