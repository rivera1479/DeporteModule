<?php

namespace Deportes\Http\Middleware;

use Session;

use Illuminate\Contracts\Auth\Guard;
use Closure;

class EventManager
{
    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->rol != 3){
            Session::flash('message-error', 'Sin privilegios');
            return redirect()->to('admin');
        }
        return $next($request);
    }
}
