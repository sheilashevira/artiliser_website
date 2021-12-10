<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselRow extends Model
{
    protected $table='carousel_rows';

    protected $fillable = ['name','description'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'carousel_rows_id');
    }
}
