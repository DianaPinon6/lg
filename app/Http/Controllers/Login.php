<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
            public function login(){
        return view('login');
    }

    public function Muestra(Request $request){
        $user=$request->input('inuser');
        $password=$request->input('inpass');
        if($user=='pion.diana' and $password=='MAPEANJO'){
            $mensaje='inicio de sesion correctamente';
        }else if($user!='pion.diana'){
            $mensaje='Verifica que tu usuario este escrito correctamente';
        }else{
            $mensaje='Verifica que tu contraseña este escrita correctamente';
        }
        //dd($request);
        return view('muestra',['msg'=>$mensaje]);
    }


}