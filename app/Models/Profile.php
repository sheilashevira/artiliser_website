<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table='profiles';

    protected $fillable = [
        'users_id', 
        'image', 
        'address', 
        'addres_2', 
        'countries_id', 
        'states_id', 
        'cities_id', 
        'zip_code'];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\Cities', 'cities_id');
    }
        
    public function countries()
    {
        return $this->belongsTo('App\Models\Countries', 'countries_id');
    }
    
    public function states()
    {
        return $this->belongsTo('App\Models\States', 'states_id');
    }    
}
