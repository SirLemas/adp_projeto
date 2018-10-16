<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    return view('login_page');
 }
    public function perfil(){
        return view('logado_page');
    }
    public function cadastrar(){
        return view('cadastrar_page');
    }
}
