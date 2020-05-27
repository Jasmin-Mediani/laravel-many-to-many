<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    //metto le relazioni con User

    public function user() {
        return $this->belongsTo('App\User');
    }

    //metto le relazioni con page, con cui è in relazione in modo many to many ed entrambe avranno belongsToMany

    public function pages() {
        return $this->belongsToMany('App\Page');
    }
}
