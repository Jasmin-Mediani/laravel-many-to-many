<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //!!!!! collego la User alla tabella Infouser. E' un rapporto di uno a uno, dove ogni utente ha una tabella info. 

    public function info() {
        return $this->hasOne('App\InfoUser');
    }

    //!!! collego la User anche a categories... ogni utente ha molte categorie...)

    public function categories() {
        return $this->hasMany('App\Category');
    }

    //!!! collego la User anche a Photos... ogni utente ha molte photos...)

    public function photos() {
        return $this->hasMany('App\Photo');
    }

    
    //!!! collego la User anche a Tags... ogni utente ha molti tags...)

    public function tags() {
        return $this->hasMany('App\Tag');
    }

    //------------------------------------------------------//

    //!!! collego la User anche a Pages... Così ogni utente ha molte pagine...)

    public function pages() {
        return $this->hasMany('App\Page');
    }

    //-------------------------------------------------------//
}
