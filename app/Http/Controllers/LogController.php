<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Http\Requests;
use Deportes\Http\Requests\LoginRequest;
use Deportes\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

class LogController extends Controller
{

    public function store(LoginRequest $request)
    {

       if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return Redirect::to('admin');
         }
         Session::flash('message-error', 'Datos son incorrectos!!');
         return Redirect::to('/'); 
    }

    public function login()
    {
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
