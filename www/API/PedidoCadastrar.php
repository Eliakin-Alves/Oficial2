<?php
 
 namespace LOJA\API;
 use LOJA\Model\Cliente;
 use LOJA\Model\Pedido;
 use LOJA\Model\Carrinho;
 use LOJA\DAO\DAOPedido;

 class PedidoCadastrar{

     public $msg;

     function __construct($url){

        if(isset($_SESSION['clienteid'])){
            $this->efetuarPedido();

            header("location: ".$url."/pedido/pagamento");

        }else{
            $_SESSION['url'] = $url."/pedido/finalizar";

            header("location: ".$url."/login/cliente");
        }
     }
     function efetuarPedido(){

        try{
           /* $c =new Cliente();
            $c->setId($_SESSION['clienteid']);// Inserir um id já existente
            $c->setNome($_SESSION['clientenome']);*/
            $frete = $_SESSION['frete'];
            $obj = new Pedido();
            //$c->setId();
            $obj->setData(date("d-m-y"));
            $obj->setFrete($frete->getValor());
            $obj->setDias($frete->getPrazoEntrega());
           // $obj->setCliente($c);

            $DAO = new DAOPedido();
            $this->msg = $DAO->cadastrar($obj,$_SESSION['carrinho']);

            
        }catch(Exception $e){
            $this->msg = $e->getMessage();
        }




     }
     
 }
 ?>   