<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidarRegistro;
use Illuminate\Support\MessageBag;

class UsuarioController extends Controller
{
    //
    public function index(){
        $usuarios = DB::table('usuario')->get();

        return view('index',['user'=>$user]);
    }

    public function crear_usuario(){
        return view('registro');
    }

    public function guardar_usuario(ValidarRegistro $request){
        $now = new \DateTime();
        $datos=[
            'nick' => $request->input('nickname'),
            'email' => $request->input('correo'),
            'password' => $request->input('password'),
            'password_c' => $request->input('password_confirme'),
        ];

       $usuario = DB::table('usuario')->insert(array(
       
        'nickname_u' => $request->input('nickname'),
        'email_u' => $request->input('correo'),
        'password_u' => $request->input('password'),
        'fecha_u' => $now
       
       )); 
       return view('index',['user'=>$user]);
    
       
    }

    public function traer_Usuario($id=0){
        $usuarios = DB::table('usuario')->get();

        if($id!=0){
        foreach ($usuarios as $user){
            if($user->idusuario == $id){
                return $user;
            }
        }
    }
}
    public function logear(Request $request){

        $usuarios = DB::table('usuario')->get();
        $nick = $request->input('uname');
        $pass = $request->input('psw');
        
        
        foreach ($usuarios as $user) {
            # code...
            if ($user->nickname_u == $nick && $user->password_u == $pass) {
                //echo "<h1>Bienvenida ".$user->nickname_u."</h1>";  
                return view('perfil',['user'=>$user]);
            }
        }
  
    }
}
