<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    
    protected $table = "cities";

    protected $fillable = [
        'name',
        'states_id'];


    public function states()
    {
        return $this->belongsTo('App\State', 'states_id');
    }

    public function profiles()
    {
        return $this->hasMany('App\Models\Profile', 'cities_id');
    }
}
