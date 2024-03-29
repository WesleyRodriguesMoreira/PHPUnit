<?php

namespace App\Models\Services;

use PDO;
use PDOException;

abstract class DbConnection{
 
    /** @var string $host Recebe o local do banco de dados */
    private string $host = "localhost";

    /** @var string $user Recebe o usuário */
    private string $user = "root";

    /** @var string $pass Recebe a senha */
    private string $pass = "";

    /** @var string $dbname Recebe o nome do banco de dados */
    private string $dbname = "phpunit_db";

    /** @var int|string $port Recebe a porta */
    private int|string $port = 3306;

    /** @var object $connect Recebe a conexão do banco de dados */
    private object $connect;

    protected function getConnection(){
        try{
            
            // Conexão com a porta
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname, $this->user, $this->pass);
            return $this->connect;

        }catch(PDOException $error){
            die("Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador...");
        }
    }
}
