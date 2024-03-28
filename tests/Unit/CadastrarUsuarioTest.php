<?php

namespace Test\Unit;
use App\Controllers\CadastrarUsuario;
use PHPUnit\Framework\TestCase;

class CadastrarUsuarioTest extends TestCase{

    public function testCadastrarUsuario(){

        // Instanciando a classe CadastrarUsuario
        $cadastro = new CadastrarUsuario();

        // Chamar o método cadastrar com dados do usuário
        $resultado = $cadastro->cadastrarUsuario();

        // Usar asserções para verificar se o cadastro foi bem-sucedido
        $this->assertTrue($resultado);
    }
}
