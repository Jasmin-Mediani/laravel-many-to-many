<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    'user_id',
    'category_id',
    'title',
    'summary',
    'body',
    'slug',
    ];


    //lo collego a user e a category con due funzioni distinte... ogni pagina appartiene a uno user e a una categoria

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    //anche la relazione con tags... sono in una many to many ed entrambe avranno belongsToMany

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function photos() {
        return $this->belongsToMany('App\Photo');
    }

}
