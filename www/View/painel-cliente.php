<?php include "View/header.php";?>
<link rel="stylesheet" href="../css/estilo.css">


<div class="btn-group p">
  <button type="button" class="btn btn-primary dropdown-toggle p" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog"></i>
  Settings <span class="badge badge-light">2</span>
  </button>
  <div class="dropdown-menu">
  <div class="no-centro">
    <?php  echo $_SESSION['clientenome'];?>
    </div>
    <hr>
    <a class="dropdown-item azul" href="http://localhost/Oficial2/www/painel/logoff"><i class="fas fa-sign-out-alt"></i>Sair</a>
  </div>
</div>
<div>
<?php  echo $_SESSION['clientenome'];?>
    <!-- Button trigger modal -->
</div>

   <p></p>
    <!--<a class="btn btn-primary" href="http://www.qualificaroficina.web70113.uni5.net/painel/logoff">Sair</a>-->


  


    


<?php include "View/footer.php";?>