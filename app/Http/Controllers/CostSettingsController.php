<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Http\Requests;
use Deportes\Http\Controllers\Controller;
use Deportes\Models\CostSettings;
use Redirect;
use Session;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class CostSettingsController extends Controller
{
     public function __construct(){
        $this->beforefilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route){
    $this->cost = CostSettings::find($route->getParameter('settings'));
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = CostSettings::all();
        return view('costs.index', compact('costs', $costs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('costs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $costs = new CostSettings;
        $costs->name_cost = $request->name_cost;
        $costs->type_discount = $request->type_discount;
        $costs->type = $request->type;
        $costs->cost = $request->cost;
        $costs->required = $request->required;
        $date =  Carbon::now('America/Caracas');
        $costs->date_cos = $date->format('d-m-Y');
        $costs->save();
        Session::flash('message','Descuento Creado Correctamente');
        return Redirect::to('/settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       

        return view('costs.edit', ['settings'=>$this->cost]); 
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
        $this->cost->fill($request->all());
        $this->cost->save();

        Session::flash('message','Descuento editado correctamente!');
        return Redirect::to('/settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cost->delete();
        Session::flash('message','El costo fue eliminado Correctamente!');
        return Redirect::to('/settings');   
    }
}
