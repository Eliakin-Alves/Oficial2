<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Meu estilo-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../css/estilo.css">
    <title>Hello, world!</title>
  </head>
  <body>

   

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $url;?>/painel/adm"> ADM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url;?>/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo $url;?>/cliente/listar">Lista de Clientes</a>
          <a class="dropdown-item" href="<?php echo $url;?>/cliente/vizualizar/1">Vizualizar Clientes</a>
          <a class="dropdown-item" href="<?php echo $url;?>/cliente/cadastrar">Cadastro de cliente</a>
  
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ADM
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?php echo $url;?>/usuario/listar">Lista de ADM</a>
          <a class="dropdown-item" href="<?php echo $url;?>/usuario/cadastrar">Cadastro de ADM</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviços
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?php echo $url;?>/servico/listar">Serviço Lista</a>
          <a class="dropdown-item" href="<?php echo $url;?>/servico/vizualizar/1">Serviço Vizualizar</a>
          <a class="dropdown-item" href="<?php echo $url;?>/servico/cadastrar">Serviço Cadastrar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item " href="<?php echo $url;?>/produto/listar">Lista dos Produtos</a>
          <a class="dropdown-item " href="<?php echo $url;?>/produto/cadastrar">Registrar Produto</a>
          
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fornecedor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item " href="<?php echo $url;?>/fornecedor/listar">Lista dos Fornecedores</a>
          <a class="dropdown-item " href="<?php echo $url;?>/fornecedor/cadastrar">Registrar Fornecedor</a>
          
          
        </div>
      </li>
    
     
    </ul>
   
  </div>
  <div class="btn-group p sairight">
  <button type="button" class="btn btn-primary dropdown-toggle p" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i>
  Settings <span class="badge badge-light">2</span>
  </button>
  <div class="dropdown-menu">
    <p>O Cliente Coringa Acaba de efetua um Pedido Pelo serviço de alinhamento</p>
    <hr>
    <a class="dropdown-item  azul1" href="#">Verificar</a>
    <a class="dropdown-item azul" href="http://localhost/Oficial2/www/paineladm/logoff"><i class="fas fa-sign-out-alt"></i>Sair</a>
  </div>
</div>

<div class="btn-group p sairight">
  <button type="button" class="btn btn-primary dropdown-toggle p" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog"></i>
  Settings <span class="badge badge-light">3</span>
  </button>
  <div class="dropdown-menu">
  <div class="no-centro">
    <?php  echo $_SESSION['clientenome'];?>
    
    <p class="perfil"><a href="#">Vizualizar Perfil</a></p>
    </div>
    <div class="menucliente no-centro">
    <hr class="preto">
   <!-- <h6 class="saileft0 "><strong>CONTA</strong></h6>-->
   <a class="white" href="#"> Configurações </a>
    <a href="#" class="white"> Privacidade</a>
    <hr class="preto">
    </div>
    <a class="dropdown-item azul" href="http://localhost/Oficial2/www/painel/logoff"><i class="fas fa-sign-out-alt sairight0"></i>Sair</a>
  </div>



</div>  
</nav>
<div class="container">