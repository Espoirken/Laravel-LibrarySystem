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
}
