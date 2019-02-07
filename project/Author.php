<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable= ['name','birthDate'];

    public function books(){
        return$this->belongsToMany(Book::class)->as('book');
    }
}
