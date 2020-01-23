<?php

namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOPedido;

    class PagamentoVizualizar{

        public $pagamento;
    
    function __construct(){
    
        $obj = new DAOPedido();
        $this->pagamento = $obj->buscarPedidoCliente($_SESSION['idpedido']);
    }
}

?>