<?php

namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOPedido;

    class PagamentoVizualizar{

        public $dados;

        public function __construct(){
    

        try{
            $DAO = new DAOPedido();
            $this->dados = $DAO->buscaPorId($_GET['id']);
            
        }catch(\Exception $e){
            $this->dados = $e->getMessage();
        }
    }  
}

?>