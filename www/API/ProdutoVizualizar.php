<?php 

namespace LOJA\API;

    use  LOJA\DAO\DAOProduto;

    class ProdutoVizualizar{

            public $lista;
    
            function __construct(){

    $obj = new DAOProduto();
    $this->lista = $obj->detalheProduto($_GET['id']);
            }
        }
?>