<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    // use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'address', 'contact', 'type_id', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }
    
    public function year_level(){
        return $this->belongsTo('App\YearLevel');
    }

    public function books(){
        return $this->belongsToMany('App\Book');
    }

    // public function toSearchableArray()
    // {
    //     $users = $this->toArray();

    //     $users['type_id'] = $this->type_id['user_type'];

    //     return $users;
    // }
}
