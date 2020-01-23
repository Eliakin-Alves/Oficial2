<?php include "View/header-cliente.php";?>
<link rel="stylesheet" href="../css/estilo.css">



<div>
<?php  //echo $_SESSION['clientenome'];?>
    <!-- Button trigger modal -->
    
</div>

   <p></p>
    <!--<a class="btn btn-primary" href="http://www.qualificaroficina.web70113.uni5.net/painel/logoff">Sair</a>-->
    
    <div class="jumbotron alert alert-dismissible fade show">
  <h1 class="display-4">Olá, Bem-vindo!</h1>
  <p class="lead">Esse é o Seu Painel , Onde você consegue atulizar seus dados e vê seus Pedidos.</p>
  <hr class="my-4">
  <p>Estamos dispoto a da a melhor qualidade e uma ótima comodidade, qualquer Coisa entre em <a href="#">contato conosco.</a></p>
  <a type="button" data-dismiss="alert" aria-label="Close" class="btn btn-primary btn-lg" href="#" role="button">Fecha</a>
  
</div>

<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<!-- <div class="row"> -->
		<!-- <div class="col-sm-4 col-md-4 user-details"> -->
            <div class="user-image">
                <!-- <img src="http://www.gravatar.com/avatar/2ab7b2009d27ec37bffee791819a090c?s=100&d=mm&r=g" alt="Karan Singh Sisodia" title="Karan Singh Sisodia" class="img-circle"> -->
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3><?php  echo $_SESSION['clientenome'];?></h3>
                    <span class="help-block"><?php  echo $_SESSION['clientenome'];?></span>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-user"><i class="fas fa-user-alt"></i></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-cog"><i class="fas fa-user-cog"></i></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-envelope"><i class="fas fa-mail-bulk"></i></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#events">
                            <span class="glyphicon glyphicon-calendar"><i class="fas fa-shopping-cart"></i></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Informação da conta</h4>
                            <form>
                                <div class="form-group row">
                                    <p>Nome: <?php  echo $_SESSION['clientenome'];?></p>
                                    <!--<p>CPF: <?php  //echo $_SESSION['clientesenha'];?></p>
                                    <p>Endereço: <?php  //echo $_SESSION['clienteendereco'];?></p>
                                    <p>Telefone: <?php  //echo $_SESSION['clientetelefone'];?></p>
                                    <p>Email: <?php  //echo $_SESSION['clienteemail'];?></p>
                                    <p>Senha: <?php  //echo $_SESSION['clientesenha'];?></p>-->
                                </div>
                            </form>
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4>Configurações</h4>
                        </div>
                        <div id="email" class="tab-pane">
                            <h4>Enviar mensagem</h4>
                        </div>
                        <div id="events" class="tab-pane">
                            <h4>Produtos</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Data do Pedido</th>
                                        <th scope="col">Total Compra</th>
                                        <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($pedidos as $pedido){?>
                                        <tr>
                                            <td><?php echo $pedido['data_pedido'];?></td>
                                            <td><?php echo number_format($pedido['total'],2,",",".");?></td>
                                            <td><a href="<?php echo $url;?>/painel/pedido/<?php echo $pedido['pk_pedido'];?>" class="btn btn-warning">Detalhes</a>
                                            </td>
                                            
                                            </tr>
                                        <?php }?>
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
                    <hr>   
                <?php   
                    // Fim HTML
                    }
                }
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>


          
  



    


<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>