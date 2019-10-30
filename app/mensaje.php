<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    //
    protected $table = 'mensaje';
    protected $primaryKey = 'idmensaje';

    public function usuario(){
        return $this->belongsTo('App\usuario','idusuario');
    }
}
