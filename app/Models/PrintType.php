<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintType extends Model
{
    use HasFactory;

    protected $table='print_types';

    protected $fillable = [
        'name',
        'description'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'print_types_id');
    }
}
