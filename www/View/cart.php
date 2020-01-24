<?php include "View/header.php" ?>


<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-yellow text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Carrinho de Compra
                <a href="http://localhost/Oficial2/www/" class="btn btn-outline-info btn-sm pull-right">Continuar compras</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
            <div class="row">
    <?php
        @$carrinho = $_SESSION['carrinho'];

        if($carrinho === null || empty($carrinho->getItems())){
            // Inicio HTML
            ?>
                <p>Seu Carrinho está vazio</p>

            <?php
            // Fim HTML
        }else{

            foreach ($carrinho->getItems() as $item){
                $produto = $item->getProduto();
                             
                // Inicio HTML
            ?>

                    <!-- PRODUCT -->
                    <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="<?php echo $url.'/View/img/produtos/'.$produto->getImagem(); ?>" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?php echo $produto->getNome(); ?></strong></h4>
                            <h4>
                                <small><?php echo $produto->getDescricao(); ?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?php echo $produto->getPreco(); ?><span class="text-muted"></span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                

                                    <a href="<?php echo $url; ?>/carrinho/remover/<?php echo $produto->getId(); ?>" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <hr>   
                <?php   
                    // Fim HTML
                    }
                }
            ?>

</div>
                    <!-- END PRODUCT -->
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Atualizar carrinho de compras
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                    <form method="post" action="<?php echo $url;?>/frete/calcular">
                        <label>Frente</label>
                        <input class=" " type="text" size="20" name="cep"/>
                        <button class="btn btn-primary">Calcular</button>
                        </form>
                     
                      
                    </div>
                    <?php
                        if(isset($_POST['cep'])){
                            echo "<p>Preço: R$ ".$frete->getValor()."</p>";
                            echo "<p>Entrega:  ".$frete->getPrazoEntrega()." dias</p>";
                        }
                         ?>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="<?php echo $url;?>/pedido/finalizar" class="btn btn-success pull-right">Finalizar Compra</a>
                    <div class="pull-right" style="margin: 5px">
                    Valor total: R$ 
                    </div>
                </div>
            </div>
        </div class="a">
</div>
<?php include "View/footer.php" ?>

