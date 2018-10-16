<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function postarPublicacao(){
        return view('publicar_page');    
    }
    public function pesquisarPublicacao(){
        return view('pesquisar_page');
    }
    public function alterarPublicacao(){
        echo "pesquisar";
    }
    public function deletarPublicacao(){
        echo "deletar";
    }
}
