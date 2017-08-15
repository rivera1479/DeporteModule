<?php

namespace Deportes\Models;

use Illuminate\Database\Eloquent\Model;


class CostSettings extends Model
{
    protected $table = "cost_settings";

    protected $fillable = ['name_cost','type_discount','type','cost','date_cos', 'required'];
    public $timestamps = false;

    public function events()
    {
        return $this->belongsToMany('Deportes\Models\Event','event_costs','events_id','cost_settings_id');
    }

}
