<?php

namespace App\Models\Repository;
use App\Models\Services\DbConnection;
use PDO;

/**
 * Repository reponsável por cadastrar o Usuário
 * @author phpunit_db
 */
class UsusariosRepository extends DbConnection{

    /**
     * Método para cadastrar
     * @param string $nome Nome do Usuário
     * @param string $email E-mail do Usuário
     * @return bool
     */
    public function cadastrarUsuario(string $nome, string $email): bool{

        // QUERY Cadastrar Usuário
        $query_cad_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";

        // Prepara a QUERY
        $cad_usuario = $this->getConnection()->prepare($query_cad_usuario);

        // Substituir o link pelo valor
        $cad_usuario->bindValue(':nome',$nome, PDO::PARAM_STR);
        $cad_usuario->bindValue(':email',$email, PDO::PARAM_STR);

        // Acessa o If quando executar a QUERY corretamente
        if($cad_usuario->execute()){
            return true;
        }else{
            return false;
        }
        
    }
}