<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Http\Requests;
use Deportes\Http\Requests\UserCreateRequest;
use Deportes\Http\Controllers\Controller;
use Deportes\Models\User;
use Redirect;
use Session;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['create','edit']]);
        $this->beforefilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route){
    $this->user = User::find($route->getParameter('user'));
}

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $users = User::name($request->get('name'))->orderBy('id','DESC')->paginate(2);
        if ($request->ajax()) {
            return response()->json(view('user.users',compact('users'))->render());
        }
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());
        Session::flash('message', 'El usuario fue creado exitosamente');
        return Redirect::to('/user/');
       
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
        
        return view('user.edit', ['user'=>$this->user]); 
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
        $this->user->fill($request->all());
        $this->user->save();

        Session::flash('message','Usuario editado Correctamente!');
        return Redirect::to('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->user->delete();
        Session::flash('message','Usuario Eliminado Correctamente!');
        return Redirect::to('/user');    
    }
    
}
