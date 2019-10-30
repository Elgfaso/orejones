<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table = 'post';
    protected $primaryKey = 'idpost';

    public function comentarios()
        {
            return $this->hasMany('App\comentario');
        }
    
        public function usuario(){
            return $this->belongsTo('App\usuario','idusuario');
        }
}
