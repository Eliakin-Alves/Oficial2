

<?php include "View/header.php"; ?>

<link rel="stylesheet" href="css/estilo.css">

<link rel="stylesheet" href="css/estilo.css">



</div>


   

  
  <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide saitop" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/BannerqualifiCAR.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/QualifiCAR (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/olha.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--Minha configação GB -->
<div class="row " id="ads">
    <?php foreach($lista as $produto) { ?>
    
    <!-- Category Card -->
    <div class="col-md-4 top ">
        <div class="card rounded ">
            <div class="card-image box21">
                <span class="card-notify-badge">Ótimo Rendimento</span>
                <span class="card-notify-year">2019</span>
                <img class="img-fluid" src="<?php echo $url;['imagem'] ?>/View/img/produtos/<?php echo $produto['imagem'] ?>" 
                alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto ">
                <!-- <span class="card-detail-badge">Gratis: <?php  //echo $produto['servico']?></span> -->
                <span class="card-detail-badge">R$:<?php echo number_format($produto['preco'],2,",",".");?></span>
                
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5><?php echo $produto['nome']?></h5> <a class="detalhe" href="<?php echo $url;?>/detalhes/produto/<?php echo $produto ['id']?>"
                     ><i class="fas fa-info-circle fa-2x "></i></a>
                </div>
                <a class="ad-btn" href="<?php echo $url;?>/carrinho/adicionar/<?php echo $produto ['id']?>">Comprar</a>
            </div>
        </div>
    </div>
 
    <?php } ?>
    </div>
    
    <!--Minha configação GB ^^ -->
<div class='container tt'>
<div class="card mb-3">
  <img src="img/slide.png" class="card-img-top" alt="...">
  
  </div>
</div>




</div>
<?php include "View/footer.php"; ?>