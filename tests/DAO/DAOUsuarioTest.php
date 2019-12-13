<?php
use PHPUnit\Framework\TestCase; 
use LOJA\Model\Usuario;
use LOJA\DAO\DAOUsuario;  
class DAOUsuarioTest extends TestCase{

    

    public function testCadastro(){

        $c = new Usuario();
        $c ->setNome('Gabriel');
        $c->setSenha('244466666');
        

        $DAO = new DAOUsuario();
        $msg = $DAO->cadastrar($c);

        $this->assertEquals($msg, "CADASTROU O ADMIN COM SUCESSO");
    }
}
?>
       