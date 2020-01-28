
<?php include "View/header.php";?>
<div class="saitop">

<!-- COMEÇOU o SECTION <>-->

<section class="tmme ">
<div class="card  mb-3 " >
  <div class="card-body">
  
    <a href="#"><i class="sairight0 far fa-heart"></i>Favorita</a>  |
    <a href="#"> 
  <i class="sairight0 fas fa-share-alt">
  </i>Compartilhar</a>

  
    <div class="oll">
  <img class="img-fluid reajusti " src="<?php echo $url; ?>/View/img/produtos/<?php echo $detalhe['imagem'] ?>" alt="Alternate Text" />

</div>


<div class="oll1 no-dio saitop">

  <h2 class="sairight0"><?php echo $detalhe['nome']?></h2>
  
  <h5 class=""><?php echo $detalhe['descricao']?></h5>
   
  </div>
    
    
</div>
<p class="no-centro">Todos nosso produtos são de total qualiadade e ótimo rendimento , você ganha gratis a troca em nossa oficina.</p>
</div>


</div>


</section>
<!--ACABOU A SECTION AQUI ^^ E COMEÇOU A ASIDE <>-->
<aside class="tmme1">
<div class="card  mb-3" >
  <div class="card-body "><h1>R$:<?php echo number_format($detalhe['preco'],2,",",".");?></h1></div>
  
  <div class="card-body">
    <h5 class="card-title" >A vista desconto de <strong>30% </strong> </h5>
    <hr>
  
    <p class="card-text">Este produto é vendido por <a href="#">FK Pneus</a> e entregue por QualifiCar, que garante a sua compra, do pedido à entrega.</p>
    <a class="btn btn-primary" href="<?php echo $url;?>/carrinho/adicionar/<?php echo $detalhe['pk_produto']?>">Adicionar no carrinho</a>
  </div>

  
  <hr>
</div>

</aside>

</div>

<?php include "View/footer.php";?>
