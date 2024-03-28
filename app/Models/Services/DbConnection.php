<?php

namespace App\Models\Services;

abstract class DbConnection{
 
    /** @var string $host Recebe o local do banco de dados */
    private string $host = "localhost";

    /** @var string $user Recebe o usuário */
    private string $user = "root";

    /** @var string $pass Recebe a senha */
    private string $pass = "";

    /** @var string $dbname Recebe o nome do banco de dados */
    private string $dbname = "phpunit_db";

    /** @var string $port Recebe a porta */
    private int|string $port = 3306;

    /** @var string $connect Recebe a conexão do banco de dados */
    private object $connect;

    protected function getConnection(){
        return true;
    }
}
