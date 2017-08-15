<?php

namespace Deportes\Models;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $table = "competitors";
	protected $fillable = ['name_com','last_name','gender','dni','email','birthdate','direccion','phone','cell_phone'];

    public $timestamps = false;

    public function Search()
    {
    	return '(SELECT * FROM users WHERE name = name)';
    }

    public function events(){
    	return $this->belongsToMany('Deportes\Models\Event', 'inscribed','competitor_id','events_id');
    }
}
