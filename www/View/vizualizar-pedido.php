<?php include "View/header-cliente.php";?>
<link rel="stylesheet" href="../css/estilo.css">




          <div class="row">
          <div class="col-md-4">
<form class="form-horizontal" method="post" action="cadastrar">
<Fieldset>
<legend>PEDIDO ID <?php echo $dados['pk_pedido']?></legend>
<div class="form-group">
<label class="col-md-12 control-label" for="nome">Data da Compra</label>
<div class="col-md-12">
<input id="nome" name="nome" disabled="disabled" value="<?php echo $dados['data_pedido']?>" type="text"
placeholder="" class="form-control input-md" required="">

</div>
</div>
<div class="form-group">
<label class="col-md-12 control-label" for="nome">Frete</label>
<div class="col-md-12">
<input id="nome" name="nome" disabled="disabled" value="R$<?php echo number_format($dados['frete'],2,",",".");?>" type="text"
placeholder="" class="form-control input-md" required="">

</div>
</div>
<div class="form-group">
<label class="col-md-12 control-label" for="nome">Prazo</label>
<div class="col-md-12">
<input id="nome" name="nome" disabled="disabled" value="<?php echo $dados['dias']."dias";?>" type="text"
placeholder="" class="form-control input-md" required="">

</div>
</div>
<div class="form-group">
<label class="col-md-12 control-label" for="nome">Total</label>
<div class="col-md-12">
<input id="nome" name="nome" disabled="disabled" value="R$<?php echo number_format($dados['total'],2,",",".");?>" type="text"
placeholder="" class="form-control input-md" required="">

</div>
</div>
</Fieldset>    
</form>      
          </div>
          <div class="col-md-8">
          <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
            
            
            
                </tr>
            
            
            </thead>
            <tbody>
                <?php foreach($produtos as $produto) { ?>
                    <tr>
                        <td><img width="50" src="<?php echo $url;?>/View/img/Produtos/<?php echo $produto['imagem']?>" ></td>
                        <td><?php echo $produto['nome']?></td>
                        <td><?php echo $produto['quantidade']?></td>
                        <td>R$<?php echo number_format($produto['preco'],2,",","."); ?></td>
                    
                    
                    </tr>
            
                <?php }?>
            </tbody>
            </table>
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