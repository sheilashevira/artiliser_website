<?php

namespace App\Http\Controllers\Backend;
use App\Models\PrintType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrintTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(){
        $printtypes = PrintType::all();
        $title = "Print Types";
        return view('backend.print-type.index', compact('printtypes', 'title'));
    }

    public function add(){
        $title = "Add Print Types";
        return view('backend.print-type.add', compact('title'));
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

        PrintType::create($request->all());

        return redirect()->route('print-type')
            ->with('success', 'Print Material created successfully.');
    }

    public function edit($id){
        $data = PrintType::find($id); 
        $title = "Edit Print Type";
        return view('backend.print-type.edit', compact('data', 'title'));
    }


    public function update(Request $request, $id){
        $data = PrintType::find($id); 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data->update($request->all());

        return redirect()->route('print-type')
            ->with('success', 'Print Type updated successfully');
    }

    public function read($id){
        $data = PrintType::find($id); 
        $title = "Detail Print Type";
        return view('backend.print-type.read', compact('data', 'title'));
    }

    public function delete($id){
        $data = PrintType::find($id); 
        $data->posts()->delete();
        $data->delete();
        $data->delete();
        
        return redirect()->route('print-type')
            ->with('success', 'Print Type deleted successfully');
    }
}
