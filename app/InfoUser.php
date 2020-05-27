<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'bio',
        'linkedin',
        'facebook',
        'twitter',
        'path_photo',

        //questi sono i campi compilabili che saranno visibili "ufficialmente"


    ];

    //!!!!!! Collego la tabella InfoUser alla tabella User: il rapporto è uno a uno, ogni info appartiene a uno user
    public function user() {
        return $this->belongsTo('App\User');
    }
}


