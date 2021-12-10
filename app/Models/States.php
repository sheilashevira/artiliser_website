<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $table = "states";

    protected $fillable = [
        'name',
        'countries_id'];


    public function countries()
    {
        return $this->belongsTo('App\Country', 'countries_id');
    }

    public function profiles()
    {
        return $this->hasMany('App\Models\Profile', 'states_id');
    }
}
