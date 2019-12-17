<?php //include "View/header.php";?>



<div class="container">

<link rel="stylesheet" href="../2css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        
        <div class="content first-content">
        
            <div class="first-column">
            
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Para manter-se conectado conosco</p>
                <p class="description description-primary">faça o login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">Logar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Criar Conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou use seu email para registrar:</p>
               
                <i class="user1 far fa-user-circle fa-4x"></i>
                    
                <a href="http://localhost/Oficial2/www/cliente/cadastrar">   <button  class=" btn btn-second" >Registrar</button>  </a>      
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá :)</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">Começe a usufruir Dos nosso Benefícios</p>
                <button id="signup" class="btn btn-primary">Registrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Logue com sua conta </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use sua conta do site:</p>
                <form class="form" method="post" action="adm">
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="nome" name="nome" placeholder="Nome">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha ?</a>
                    <button class="btn btn-second">Logar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
</div>
    <script src="../3js/app.js"></script>
<?php //include "View/footer.php";?>