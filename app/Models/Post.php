<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Post extends Model
{
    use HasFactory;
    use Uuids;
    public $incrementing = false;
    
    protected $table='posts';
    
    protected $fillable = [
        'id',
        'name',
        'categories_id',
        'image',
        'content',
        'price', 
        'print_materials_id', 
        'print_types_id', 
        'carousel_rows_id',
        'sizes_id'];


    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id');
    }
    
    public function print_materials()
    {
        return $this->belongsTo('App\Models\PrintMaterial', 'print_materials_id');
    }

    public function print_types()
    {
        return $this->belongsTo('App\Models\PrintType', 'print_types_id');
    }

    public function carousel_rows()
    {
        return $this->belongsTo('App\Models\CarouselRow', 'carousel_rows_id');
    }

    public function sizes()
    {
        return $this->belongsTo('App\Models\Size', 'sizes_id');
    }

}
