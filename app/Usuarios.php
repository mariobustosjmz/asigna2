<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\DB;

class Usuarios extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];







    public static function  filterAndPaginate($nombre,$type)
    {
        return Usuarios::nombre($nombre)
            ->type($type)
            ->orderBy('id','ASC')
            ->paginate();
        $users = DB::table('users')->select('name as user_name')->get();

    }



    public function getFullNameAttribute(){

        return $this->first_name .' '.$this->last_name;

    }













    /**



    public function setPasswordAttribute($value)
    {
        if( ! empty ($value))
        {
            $this->attributes['password']=bcrypt($value);
        }

    }



    public function profile(){

        return $this->hasOne('Curso\UserProfile');
    }



    public function scopeNombre($query,$nombre)
    {
        if($nombre!="")
            $query->where('first_name',$nombre);
    }

    public function scopeType($query,$type)
    {
        $types=config('options.types');

        if($type!="" && isset($types[$type]))
            $query->where('type',$type);
    }

*/


}

