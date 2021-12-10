<?php

namespace App\Http\Controllers\Backend;
use App\Models\CarouselRow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselRowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(){
        $carouselrows = CarouselRow::all();
        $title = "Carousel Rows";
        return view('backend.carousel-row.index', compact('carouselrows', 'title'));
    }

    public function add(){
        $title = "Add Carousel Row";
        return view('backend.carousel-row.add', compact('title'));
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

        CarouselRow::create($request->all());

        return redirect()->route('carousel-row')
            ->with('success', 'Carousel Row created successfully.');
    }

    public function edit($id){
        $title = "Edit Carousel Row";
        $data = CarouselRow::find($id); 
        return view('backend.carousel-row.edit', compact('data', 'title'));
    }

    public function update(Request $request, $id){
        $data = CarouselRow::find($id); 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data->update($request->all());

        return redirect()->route('carousel-row')
            ->with('success', 'Carousel Row updated successfully');
    }

    public function read($id){
        $data = CarouselRow::find($id); 
        $title = "Detail Carousel Row";
        return view('backend.carousel-row.read', compact('data', 'title'));
    }

    public function delete($id){
   
        $data = CarouselRow::find($id); 
        $data->posts()->delete();
        $data->delete();
        
        return redirect()->route('carousel-row')
            ->with('success', 'Carousel Row deleted successfully');
    }

}
