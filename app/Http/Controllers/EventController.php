<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Models\Event;
use Deportes\Models\Category;
use Deportes\Models\CostSettings;
use Deportes\Models\EventCost;
use Deportes\Http\Requests;
use Deportes\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Carbon\Carbon;

class EventController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }
      public function find(Route $route){
        $this->event = Event::find($route->getParameter('events'));
    }

    public function index(Request $request)
    {
        $events = Event::with('category','costsettings')->name($request->get('name_eve'))->orderBy('id','DESC')->paginate(2);
        if ($request->ajax()) {
            return response()->json(view('event.index',compact('events'))->render());
        }
        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costs = CostSettings::lists('name_cost', 'id');
        $categories = Category::lists('name_cat', 'id');
        return view('event.create', compact('categories', 'costs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = Event::create($request->all());
        $costs = $request->costs;
        $event->costsettings()->attach($costs);
        Session::flash('message','Evento Creado Correctamente');
        return Redirect::to('/events');
        
    }

    public function search()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('store.show', compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::lists('name_cat', 'id');
        $costs = CostSettings::lists('name_cost','id');
        return view('event.edit',['events'=>$this->event,'categories'=>$categories,'costs'=>$costs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->event->fill($request->all());
         $this->event->save();
         $costs = $request->costs;
         $this->event->costsettings()->sync($costs);

        Session::flash('message','Evento editado Correctamente');
        return Redirect::to('/events');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $costs = $request->costs;
        $this->event->costsettings()->detach($costs);
        $this->event->delete();
        \Storage::delete($this->event->img);
        Session::flash('message','Evento Eliminado Correctamente');
        return Redirect::to('/events');
    }
}
