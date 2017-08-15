<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Models\Event;
use Deportes\Http\Requests;
use Deportes\Http\Controllers\Controller;

class FrontController extends Controller
{
	public function __construct(){
		$this->middleware('auth',['only' => 'admin']);
	}
  
  public function index()
  {
    $eventos = Event::all();
    return view('index', compact('eventos'));
  }

  public function admin()
  {
    return view('admin.index');
  }

}
