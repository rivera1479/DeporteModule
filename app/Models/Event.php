<?php

namespace Deportes\Models;

use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
	protected $fillable = ['name_eve','description','slug','quantity','img','price','date_start','date_end','site','category_id'];

    public $timestamps = false;

 public function setImgAttribute($img){
        if (!empty($img)) {
        $name = Carbon::now()->second.$img->getClientOriginalName();
        $this->attributes['img'] = $name;
        \Storage::disk('local')->put($name, \File::get($img)); 
        }
        
    }

    public function setSlugAttribute($slug){
       $nombre=str_slug($this->name_eve);
       $this->attributes['slug'] = $nombre;

    }
    

/*public static function Events(){
		return DB::table('events')
		->join('categories', 'categories.id', '=', 'events.category_id')
		->select('events.*', 'categories.name_cat')
		->get();
	}*/



public function scopeName($query, $name_eve)
    {
        if (trim($name_eve) != "") {
            $query->where('name_eve','LIKE', "%$name_eve%");
        }
        
    }

    public function category()
    {
        return $this->belongsTo('Deportes\Models\Category');
    }
    
    public function competitors()
    {
        return $this->belongsToMany('Deportes\Models\Competitor','inscribed','competitor_id','events_id');
    }

    public function costsettings()
    {
        return $this->belongsToMany('Deportes\Models\CostSettings','event_costs','events_id','cost_settings_id');
    }
}
