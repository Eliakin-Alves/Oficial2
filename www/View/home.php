
<?php$logout = isset($_GET['logout']) ? $_GET['logout'] : "";

if ($logout == 1)
{
unset($_SESSION['clientenome']);
}
?>
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
<div class="card-deck saitop">
  <div class="card">
    <img src="img/alinha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Alinhamento</h5>
      <p class="card-text">O alinhamento das rodas em um veículo é a correção geométrica executada no conjunto de elementos que formam a suspensão, a qual permite ao veículo manter sua trajetória. </p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/pneu.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Troca De Pneus</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/poli.jpg" class="card-img-top bb" alt="...">
    <div class="card-body">
      <h5 class="card-title ss">Polimento</h5>
      <p class="card-text">Polimento é todo o procedimento realizado com o intuito de gerar ou reativar o brilho de quaisquer superfícies. Em geral, toda peça natural ou de manufatura, pode ser polida.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
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
                    <h5><?php echo $produto['nome']?></h5> <a class="detalhe" href="/Oficial2/www/detalhes/produto" ><i class="fas fa-info-circle fa-2x "></i></a>
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
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted"></small></p>
  </div>
  </div>
</div>

<form class="form-horizontal center-form ">
<fieldset>
<div class='container ww'>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textinput">Telefone / WhatsApp</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textinput">E-mail </label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label jj" for="textarea">O que podemos fazer por você? </label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Digite aqui! </textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
</div>
<?php include "View/footer.php"; ?>