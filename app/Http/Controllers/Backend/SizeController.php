<?php

namespace App\Http\Controllers\Backend;
use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index(){
        $sizes = Size::all();
        $title = "Sizes";
        return view('backend.size.index', compact('sizes', 'title'));
    }

    public function add(){
        $title = "Add Size";
        return view('backend.size.add', compact('title'));
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

        Size::create($request->all());

        return redirect()->route('size')
            ->with('success', 'Size created successfully.');
    }

    public function edit($id){
        $data = Size::find($id); 
        $title = "Edit Size";
        return view('backend.size.edit', compact('data', 'title'));
    }


    public function update(Request $request, $id){
        $data = Size::find($id); 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data->update($request->all());

        return redirect()->route('size')
            ->with('success', 'Size updated successfully');
    }

    public function read($id){
        $data = Size::find($id); 
        $title = "Detail Size";
        return view('backend.size.read', compact('data', 'title'));
    }

    public function delete($id){
        $data = Size::find($id); 
        $data->posts()->delete();
        $data->delete();

        return redirect()->route('size')
            ->with('success', 'Size deleted successfully');
    }

}
