<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'book_title', 'category_id', 'author','publisher_name', 'copyright_year', 'status'
    ];

    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

    // public function user(){
    //     return $this->hasMany('App\User');
    // }

}
