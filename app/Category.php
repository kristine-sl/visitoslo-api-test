<?php

namespace App;

use App\Entity;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'name' ]; 

    public function entities() 
    {
    	return $this->hasMany( Entity::class ); 
    }
}
