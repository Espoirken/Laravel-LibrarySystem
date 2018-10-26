<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'book_title', 'category_id', 'author','source','publisher_name', 'copyright_year', 'status'
    ];

    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    // public function borrow(){
    //     return $this->hasMany('App\Borrow');
    // }

    // public function user(){
    //     return $this->hasMany('App\User');
    // }

}
