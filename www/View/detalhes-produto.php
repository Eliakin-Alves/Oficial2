
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
  <div class="card-body no-centro">R$:<?php echo number_format($detalhe['preco'],2,",",".");?></div>
  <a class="btn btn-primary" href="<?php echo $url;?>/carrinho/adicionar/<?php echo $produto ['id']?>">Adicionar no carrinho</a>
  <div class="card-body">
    <h5 class="card-title" >A vista de <span style="text-decoration:line-through"> R$<?php echo number_format($detalhe['preco'],2,",",".");?>
    </span> vai para R$950,00</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>

</aside>

</div>

<?php include "View/footer.php";?>
