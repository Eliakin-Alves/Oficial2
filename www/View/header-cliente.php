<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $url; ?>/css/estilo.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Jomolhari|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
     integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>QualifiCAR</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container">


            <a class="navbar-brand bg-yellow cont" href="http://localhost/Oficial2/www/"><img src="../img/logo.png" class="logo" alt=""></a>
                                      <div class="">
                        <div type="" class="" ><a href="<?php echo $url; ?>/painel/cliente">
                        <i class="fas fa-user sairight0"></i><?php  echo $_SESSION['clientenome'];?></a> </div>
                        
                   </div>
               
           
</div>



<div class="btn-group p sairight">
  <a class="btn  p " href="<?php echo $url; ?>/home" >Inicio</a>
  <a class="btn azul" href="http://localhost/Oficial2/www/painel/logoff"><i class="fas fa-sign-out-alt sairight0"></i>Sair</a>



</div>
    </nav>
    <div class="container">