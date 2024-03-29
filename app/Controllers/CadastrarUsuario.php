<?php
  
namespace App\Controllers;
use App\Models\Repository\UsusariosRepository;

class CadastrarUsuario{

    public function cadastrarUsuario(string $nome, string $email){
        $cadUsuario = new UsusariosRepository();
        if($cadUsuario->cadastrarUsuario($nome, $email)){
            return true;
        }else{
            return false;
        }
        
    }
}