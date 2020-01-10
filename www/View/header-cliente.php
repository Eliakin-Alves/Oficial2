<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Jomolhari|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>QualifiCAR</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container">
            <a class="navbar-brand bg-yellow cont" href="#"><img src="../img/logo.png" class="logo" alt=""></a>
            <button class="navbar-toggler bg-yellow-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
               
                   
                   <div class="">
                        <div type="" class="" ><a href="#">
                        <i class="fas fa-user sairight0"></i></a><?php  echo $_SESSION['clientenome'];?></div>
                        
                   </div>
               
           
</div>



<div class="btn-group p sairight">
  <button type="button" class="btn btn-primary dropdown-toggle p" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog"></i>
  Settings <span class="badge badge-light">2</span>
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