<?php
namespace LOJA\incluedes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://www.qualificaroficina.web70113.uni5.net/login/cliente");
        }
    }
    public static function restritoUsuario() {
        $config = new Config();
        if(!isset($_SESSION['clienteid'])) {
            header("location: {$config->url}/login/usuario");
        }
    }
}