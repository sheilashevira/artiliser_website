<?php

namespace App\Http\Controllers\Backend;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(){
        
        $abouts = About::all();
        $title = "About";

        return view('backend.about.index', compact('abouts', 'title'));
    }

    public function add(){
        $title = "Add About";
        return view('backend.about.add', compact('title'));
    }

    public function insert(Request $request)
    {

        $request->validate([
            'content' => 'required',
        ],
        [
            'content.required' => 'Please Fill Out This Field!',
        ]);

        About::create($request->all());

        return redirect()->route('about')
            ->with('success', 'About created successfully.');
    }

    public function edit($id){
        $data = About::find($id); 
        $title = "Edit About";
        return view('backend.about.edit', compact('data', 'title'));
    }


    public function update(Request $request, $id){
        $data = About::find($id); 
        $request->validate([
            'content' => 'required',
        ]);
        $data->update($request->all());

        return redirect()->route('about')
            ->with('success', 'About updated successfully');
    }

    public function read($id){
        $data = About::find($id); 
        $title = "Detail About";
        return view('backend.about.read', compact('data', 'title'));
    }

    public function delete($id){
        
        $data = About::find($id); 
        About::where('id',$id)->delete();

        return redirect()->route('about')
            ->with('success', 'About deleted successfully');
    }
}
