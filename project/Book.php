<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable= ['name','pages','ISBN','price','published_at'];
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return$this->belongsToMany(Category::class)->withTimestamps()->as('category');
    }
    public function authors(){
        return$this->belongsToMany(Author::class)->withTimestamps()->as('author');
    }
}
