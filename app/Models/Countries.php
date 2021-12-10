<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $table = "countries";

    protected $fillable = ['name'];

    public function states()
    {
        return $this->hasMany('App\Models\States');
    }

    public function profiles()
    {
        return $this->hasMany('App\Models\Profile', 'countries_id');
    }
}
