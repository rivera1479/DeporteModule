<?php

namespace Deportes\Http\Controllers;

use Illuminate\Http\Request;

use Deportes\Models\Event;
use Deportes\Models\Category;
use Deportes\Models\Competitor;
use Deportes\Http\Requests;
use Deportes\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Carbon\Carbon;


class StoreController extends Controller
{

    public function __construct(){
        if(!\Session::has('store')) \Session::put('store', array());
    }

    public function index()
    {
        $store = \Session::get('store');
        $store = collect($store);
        return view('store.index', compact('store'));
        }

    public function add(Event $event){
        $store = \Session::get('store');
        $costsettings = Event::findOrFail($store->id);
        $costsettings->costsettings;
        if ($store = null) {
          
            \Session::get('store');
            $store = $event;
            \Session::put('store', $store);
            return view('store.register', compact('store', 'costsettings'));
        }
        else{
        
                 
            \Session::forget('store');
             $store = $event;
            \Session::put('store', $store);
            
            return view('store.register', compact('store','costsettings'));
        }
        
        

    }

    public function register(Event $event, Request $request){
        $store = \Session::get('store');
        $competitor = $request->all();
        $dni = $request->dni;
        if (! isset($store['competitors'])) {
        $store['competitors'] = [];
        }
        $store['competitors'][$dni] = $competitor;
        \Session::put('store', $store);
        \Session::save('store', $store);

        if (isset($request->pagar)) {
            $cant = count($store['competitors']);
            $price = $store['price'];
            $total = $cant * $price;
            return view('store.detail', compact('store','total'));
        }
        else
        {
            return view('store.register', compact('store'));
        }
        
    
        
    }


    
    public function show($slug)
        {
            $event = Event::where('slug', $slug)->first();
            return view('store.show', compact('event'));

        }

        public function detail(Event $event, Request $request)
        {
            $store = \Session::get('store');
            $competitor = $request->all();
            $dni = $request->dni;
            if (! isset($store['competitors'])) {
            $store['competitors'] = [];
            }
            $store['competitors'][$dni] = $competitor;
            \Session::put('store', $store);
            \Session::save('store', $store);

            return view('store.detail', compact('tienda'));
        }

}
