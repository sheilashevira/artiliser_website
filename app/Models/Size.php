<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $table='sizes';

    protected $fillable = ['name','description'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'sizes_id');
    }
}
