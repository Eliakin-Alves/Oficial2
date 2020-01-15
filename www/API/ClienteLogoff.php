<?php
    namespace LOJA\API;

    class clienteLogoff{

        function __construct(){
            unset($_SESSION['clienteid']); //SESSION é PARA DESTRUI A INFORMAÇÃo para deslogar
            unset($_SESSION['clientenome']);
            unset($_SESSION);
<<<<<<< HEAD
            // header("location: http://www.qualificaroficina.web70113.uni5.net/login/cliente");
=======
           // header("location: http://www.qualificaroficina.web70113.uni5.net/login/cliente");
>>>>>>> ab5bc10f699ed81f93931b2a6eb0ed396b16229f
            header("location: http://localhost/Oficial2/www/login/cliente");

        }
    }
?>