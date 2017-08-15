<?php

namespace Deportes\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'last_name', 'email', 'password', 'rol'];


    public $timestamps = false;
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

        
    public function setPasswordAttribute($valor)
    {
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
            }
    }

    public function getRolAttribute($value)
    {
        $admin= 1;
        $manageri = 2;
        $managere = 3;
        if ($admin == $value) {
            return 'Admin';
        }
        if ($manageri == $value) {
            return 'Gestor de Facturas';
        }
        if ($managere == $value ) {
            return 'Gestor de eventos';
        }
     }
     public function scopeName($query, $name)
    
    {
        if (trim($name) != "") {
            $query->where(\DB::raw("CONCAT(name, ' ', last_name)"),"LIKE", "%$name%");
        }
        
    }
}
