<?php include "View/header.php"; ?>
<link rel="stylesheet" href="css/estilo.css">




<div class="card text-center">
  <div class="card-header">|
    Editar informação de pagamento |
  </div>
  <div class="card-body">
    <h5 class="card-title">Tipos de pagamentos </h5>
    
    <img src="../img/icones-cartoes.png"  />
    <hr>
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
   
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nome Completo</label>
      <input type="name" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço Completo</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Complementares</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Casa, ou Perto da praça">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected>Seu Estado</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CEP</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Verificar
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Confirmar</button>
</form>
<hr>
<h4 class="mb-3">Pagamento <button type="button" class="btn btn-light">Gerar Boleto</button></h4>

<?php echo $_SESSION['idpedido'];?>
<h6> </h6>

<div class="d-block my-3">
  <div class="custom-control custom-radio">
    <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked required>
    <label class="custom-control-label" for="credito">Cartão de crédito</label>
  </div>
  <div class="custom-control custom-radio">
    <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required>
    <label class="custom-control-label" for="debito">Cartão de débito</label>
  </div>
  <div class="custom-control custom-radio">
    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
    <label class="custom-control-label" for="paypal">PayPal</label>
  </div>
</div>
<div class="row">
  <div class="col-md-6 mb-3">
    <label for="cc-nome">Nome no cartão</label>
    <input type="text" class="form-control" id="cc-nome" placeholder="" required>
    <small class="text-muted">Nome completo, como mostrado no cartão.</small>
    <div class="invalid-feedback">
      O nome que está no cartão é obrigatório.
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="cc-numero">Número do cartão de crédito</label>
    <input type="text" class="form-control" id="cc-numero" placeholder="" required>
    <div class="invalid-feedback">
      O número do cartão de crédito é obrigatório.
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 mb-3">
    <label for="cc-expiracao">Data de expiração</label>
    <input type="text" class="form-control" id="cc-expiracao" placeholder="" required>
    <div class="invalid-feedback">
      Data de expiração é obrigatória.
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="cc-cvv">CVV</label>
    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
    <div class="invalid-feedback">
      Código de segurança é obrigatório.
    </div>
  </div>
</div>
    <p class="card-text">Reveja seus dados.</p>
    <a href="#" class="btn btn-primary">Confirmar</a>
  </div>
  <div class="card-footer text-muted">
    Obrigado Pela Preferencia .
  </div>
</div>


<!--<div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Terceiro item</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success">-R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Resgatar</button>
              </div>
            </div>
          </form>
        </div>-->














<?php include "View/footer.php"; ?>