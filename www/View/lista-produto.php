
<?php include "View/header.php";?>
<h1 class="no-centro">Qualificar Produtos</h1>
<hr>
</div>
<div class="container">
<aside>

<div>
<div class="navbar-light  vertical-menu oll ">
  <h4  class="cont"><i class="farra fas fa-car"></i> <strong class="mr-auto">Categorias </strong></h4>
  <a class="no-centro" href="#"> Pneus </a>
  <a class="no-centro" href="#"> Aros </a>
  <a class="no-centro" href="#"> Óleo </a>
  <a class="no-centro" href="#"> Peças </a>

  <hr>
</div>
</div>
</aside>
</div>
<section>
<div class="container">
<div class="row " id="ads">
    <?php foreach($lista as $produto) { ?>
    
    <!-- Category Card -->
    <div class="col-md-4 top ">
        <div class="card rounded ">
            <div class="card-image box21">
                <span class="card-notify-badge">Ótimo Rendimento</span>
                <span class="card-notify-year">2020</span>
                <img class="img-fluid" src="<?php echo $url;['imagem'] ?>/View/img/produtos/<?php echo $produto['imagem'] ?>" 
                alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto ">
                <!-- <span class="card-detail-badge">Gratis: <?php  //echo $produto['servico']?></span> -->
                <span class="card-detail-badge">R$:<?php echo number_format($produto['preco'],2,",",".");?></span>
                
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5><?php echo $produto['nome']?></h5> <a class="detalhe" href="<?php echo $url;?>/detalhes/produto/<?php echo $produto ['id']?>" ><i class="fas fa-info-circle fa-2x "></i></a>
                </div>
                <a class="ad-btn" href="<?php echo $url;?>/carrinho/adicionar/<?php echo $produto ['id']?>">Comprar</a>
            </div>
        </div>
    </div>
 
    <?php } ?>
    </div>

</section>
<!--<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            
            <th scope="col">NOME</th>
            <th scope="col">PREÇO</th>
            <th scope="col">SERVIÇO</th>
            <th scope="col"></th>
            
        </th>
    </thead>
    <tbody>

    
        <?php foreach($lista as $produto) { ?>
            <tr>
                <td><img width="50" src="../View/img/produtos/<?php echo $produto['imagem'] ?>"></td>
                  
                <td><?php echo $produto['nome']?></td>
                <td><?php echo number_format($produto['preco'],2,",",".");?></td>
               
                <td><?php  echo $produto['servico']?></td>
             
                 
                 
  
            </tr>
        <?php } ?>
    </tbody>
</table>
</section>-->
<?php include "View/footer.php";?>
