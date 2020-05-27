<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'user_id', 
        'name', 
        'description'

    ];

    //riporto la relazione: ogni categoria appartiene a un Utente... (e ogni utente ha molte categorie... quest'ultima è da fare in User.php)
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    //faccio il collegamento con pages... ogni categoria appartiene a una pagina

    public function pages() {
        return $this->belongsTo('App\page');
    }

}
