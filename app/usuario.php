<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';

    protected $fillable = [
        'nickname_u','nombre_u', 'email_u', 'password_u',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comentarios()
    {
        return $this->hasMany('App\comentario');
    }

    public function mensajes(){
        return $this->hasMany('App\mensaje');   
    }

    public function posts(){
        return $this->hasMany('App\post');   
    }


}
