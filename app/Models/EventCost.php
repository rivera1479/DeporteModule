<?php

namespace Deportes\Models;

use Illuminate\Database\Eloquent\Model;

class EventCost extends Model
{
    protected $table = "event_costs";
	protected $fillable = ['events_id','cost_settings_id'];
	public $timestamps = false;

	public function scopeBorrar($query, $id)
	{
		$query->where('events_id','=', $id);
		
	}
}
