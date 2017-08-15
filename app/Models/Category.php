<?php

namespace Deportes\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public $timestamps = false;

    protected $fillable = ['name_cat', 'description'];

    /*public function scopeNamecat($query, $name_cat)
    {
        if (trim($name_cat) != "") {
            $query->where('name_cat','LIKE', "%$name_cat%");
        }
        
    }*/
}
