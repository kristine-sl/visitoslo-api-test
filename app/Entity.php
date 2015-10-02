<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = [ 'name', 'source' ]; 

    public function categories() 
    {
    	return $this->hasMany( Category::class ); 
    }
}
