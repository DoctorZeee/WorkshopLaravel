<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'cover',
        'category_id',
        'auhtor',
        'synopsis'
    ];

    public function category (){
        return $this->belongsTo(BookCategory::class, 'category_id');
    }
}
