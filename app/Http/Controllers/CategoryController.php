<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Http\Requests;
use Deportes\Http\Controllers\Controller;
use Deportes\Models\Category;
use Illuminate\Routing\Route;

class CategoryController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->categorie = Category::find($route->getParameter('category'));
    }

    public function index()
    {
        return view('category.index');
    }

    public function listing()
    {
        $categories = Category::all();
        //$categories = Category::namecat($request->get('namecat'))->orderBy('id','DESC')->paginate(2);
        return response()->json(
                $categories->toArray()
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->ajax()){
            Category::create($request->all());
            return response()->json([
                    "mensaje" => "Creado!"

                ]);
        }
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
        $categories = Category::find($id);

        return response()->json(
            $categories->toArray()

            );
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
        $categories = Category::find($id);
        $categories->fill($request->all());
        $categories->save();

        return response()->json([
            "mensaje" => "listo"
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categorie->delete();
        return response()->json(["mensaje"=>"borrado"]);
    }
}
