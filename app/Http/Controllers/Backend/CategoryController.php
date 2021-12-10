<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(){
        $categories = Category::all();
        $title = "Categories";
        return view('backend.category.index', compact('categories', 'title'));
    }

    public function add(){
        $title = "Add Category";
        return view('backend.category.add', compact('title'));
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ],
        [
            'name.required' => 'Please Fill Out This Field!',
            'description.required' => 'Please Fill Out This Field!',
        ]);

        Category::create($request->all());

        return redirect()->route('category')
            ->with('success', 'Category created successfully.');
    }

    public function edit($id){
        $data = Category::find($id); 
        $title = "Edit Category";
        return view('backend.category.edit', compact('data', 'title'));
    }


    public function update(Request $request, $id){
        $data = Category::find($id); 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data->update($request->all());

        return redirect()->route('category')
            ->with('success', 'Category updated successfully');
    }

    public function read($id){
        $data = Category::find($id); 
        $title = "Detail Category";
        return view('backend.category.read', compact('data', 'title'));
    }

    public function delete($id){
   
        $data = Category::find($id); 
        if($data->name == 'Article'){
            return redirect()->route('category')
                ->with('error', 'Category Cannot be Deleted');
        }else{
        $data->posts()->delete();
        $data->delete();
            return redirect()->route('category')
                ->with('success', 'Category deleted successfully');
        }
    }
}