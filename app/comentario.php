<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    //
    protected $table = "comentario";
    protected $primaryKey = 'idcomentario';

    public function usuario(){
        return $this->belongsTo('App\usuario','idusuario');
    }

    public function post(){
        return $this->belongsTo('App\post','idpost');
    }
}
