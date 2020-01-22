
<?php include "View/header.php";?>
<div class="saitop">

<!-- COMEÇOU o SECTION <>-->

<section class="tmme ">
<div class="card  mb-3 " >
  <div class="card-body">
  <?php foreach($lista as $produto) { ?>
    <a href="#"><i class="sairight0 far fa-heart"></i>Favorita</a>  |
    <a href="#"> 
  <i class="sairight0 fas fa-share-alt">
  </i>Compartilhar</a>

  
    <div class="oll">
  <img class="img-fluid reajusti " src="<?php echo $url;['imagem'] ?>/View/img/produtos/<?php echo $produto['imagem'] ?>
  " alt="Alternate Text" />

</div>


<div class="oll1 no-dio saitop">

  <h2 class="sairight0"><?php echo $produto['nome']?></h2>
  <h5 class="">Nome ilustrativo do Produto</h5>
   
  </div>
    
    
</div>
<p class="">Detalhes do produto ilustrativo , você ganha gratis a troca desse troca na nossa oficina</p>
</div>


</div>


</section>
<!--ACABOU A SECTION AQUI ^^ E COMEÇOU A ASIDE <>-->
<aside class="tmme1">
<div class="card  mb-3" >
  <div class="card-body">R$:<?php echo number_format($produto['preco'],2,",",".");?></div>
 
  <div class="card-body">
    <h5 class="card-title" >A vista de <span style="text-decoration:line-through"> R$120,00</span> vai para R$95,00</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
<?php } ?>
</aside>
</div>

<?php include "View/footer.php";?>
