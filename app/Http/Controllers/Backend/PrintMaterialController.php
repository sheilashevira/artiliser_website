<?php

namespace App\Http\Controllers\Backend;
use App\Models\PrintMaterial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrintMaterialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index(){
        $printmaterials = PrintMaterial::all();
        $title = "Print Materials";
        return view('backend.print-material.index', compact('printmaterials', 'title'));
    }

    public function add(){
        $title = "Add Print Material";
        return view('backend.print-material.add', compact('title'));
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

        PrintMaterial::create($request->all());

        return redirect()->route('print-material')
            ->with('success', 'Print Material created successfully.');
    }

    public function edit($id){
        $data = PrintMaterial::find($id); 
        $title = "Edit Print Material";
        return view('backend.print-material.edit', compact('data', 'title'));
    }


    public function update(Request $request, $id){
        $data = PrintMaterial::find($id); 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data->update($request->all());

        return redirect()->route('print-material')
            ->with('success', 'Print Material updated successfully');
    }

    public function read($id){
        $data = PrintMaterial::find($id); 
        $title = "Detail Print Material";
        return view('backend.print-material.read', compact('data', 'title'));
    }

    public function delete($id){
        $data = PrintMaterial::find($id); 
        $data->posts()->delete();
        $data->delete();
        
        return redirect()->route('print-material')
            ->with('success', 'Print Material deleted successfully');
    }
}
