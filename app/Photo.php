<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'path'

    ];

    //collego le foto agli utenti... ogni photo appartiene agli user...  e ogni user ha molte foto...(questo da fare in User.php)

    public function user() {
        return $this->belongsTo('App\User');
    }

    //collego le pagine con photo... hanno una many to many

    public function pages() {
        return $this->belongsToMany('App\page');
    }

    
}
