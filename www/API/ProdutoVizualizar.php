<?php

namespace LOJA\API;//Local desta classe
use LOJA\DAO\DAOProduto;

    class ProdutoVizualizar{

        public $dados;

        public function __construct(){
    

        try{
            $DAO = new DAOProduto();
            $this->dados = $DAO->buscaPorId($_GET['id']);
            
        }catch(\Exception $e){
            $this->dados = $e->getMessage();
        }
    }  
}

?>
