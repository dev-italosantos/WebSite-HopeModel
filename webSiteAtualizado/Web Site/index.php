<?php 
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <meta charset="utf-8"/>
  <title>Hope Model</title>
  <link rel="stylesheet" href="css/style-2.css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="logo_hope_model.png" type="image/x-png">
  <link rel="stylesheet" href="lib/owlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="lib/owlCarousel/dist/assets/owl.theme.default.min.css">


</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="open">
        <div class="layer"></div>
        <div class="layer"></div>
      </div>
      <section id="home">
        <div class="header">
          <h2 class="logo">Hope Model</h2>
          <ul>
            <li>
              <a href="#" class="active">Home</a>
            </li>
            <li>
              <a href="#contact">Siga a Hope</a>
            </li>
            <li>
              <a href="#card-meio">Oferta</a>
            </li>
            <li>
              <a href="#Sobre-Hope">Sobre a Hope</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <?php 
            session_start(); 
            if(isset($_SESSION['login'])){
              ?>
              <li>
                <a href="sair.php?"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
              </li>
              <?php }?>
            </ul>
          </div>
          <div class="bannerText">
            <h2>Think Creative</h2><br>
            <h3>And Make Innovative Design</h3>
            <p>Aqui você pode comprar as roupas da moda para renovar o seu guarda 
              roupa e usar no seu dia a dia. Site seguro e prático. Confira! Você encontra na Hope Model Online Roupas, perfumes e acessórios em até 10x s/Juros* + Juros + Troca nas lojas 
              Entre e Confira! A moda que cabe no seu bolso, consequat. 
              Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Cnsequat. 
              Duis aute irure dolor in reprehenderit
              <br>
              <?php   
              if(isset($_SESSION['login'])){

                ?>
                <h5 style="margin-left: 10px;">Bem Vindo <?php echo $_SESSION['nome']; }else{ ?></h1>

                </p>

                <a class="button" style="cursor: pointer;">Entre</a>
                <a class="button1" style="cursor: pointer;">Cadastro</a>
                <?php }?>


              </div>
              <img src="img/logo-hope.png" class="bulb">
              <ul class="sci">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <div class="element1"></div>
              <div class="element2"></div>
            </section>
          </div>


    <!--   <div id="modal1" class="modal">
        <div class="modal-content">
         <form action="#">

          <div class="input-field">
            <i class="material-icons prefix">person</i>
            <input type="text" id="name">
            <label for="name">Usuário</label>
          </div>
          <br>

          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input type="password" id="pass">
            <label for="pass">Senha</label>
          </div>
          
          <input type="submit" #submitButton value="Login" class="btn btn-large" style="background:  black;">

        </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
      </div>
    </div> -->



    <div class="container-fluid">
      <section class="parallax-img-site" id="news">
        <div class="container">
          <div>
            <div class="col-xs-12">
              <h1>Lorem Ipsum has been</h1>
              <p>
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
             </p>
           </div>
         </div>
       </div>
     </section>
   </div>

   <div class="container-fluid" id="card-meio">
    <div class="row">
     <h1 style="margin-top: 230px;">Destaques</h1>
     <div   class="border"></div>
     <div class="col 14 m3 s12">
       <div class="card sticky-action">
        <div class="card-image">
          <img src="img/short-jeans.jpg">
          <!-- <span class="card-title">short jeans</span> -->
          <a class=" #212121 grey darken-4 btn-floating halfway-fab pulse activator">+</a>
        </div>
        <div class="card-content">
          <p>Calça Jeans Mom Destroyed</p>
        </div>
        <div class="card-reveal">
          <span class="card-title">Detalhes<i class="right">x</i></span>
          <p>Calça jeans de modelagem mom, ou seja, cintura alta com pernas
            levemente ajustadas. Conta com bolsos frontais tradicionais e apenas
            um posterior, cós com passantes e braguilha com fechamentoem botão. 
          </p>
        </div>
        <div class="card-action #212121 grey darken-4">
          <a href="../../carrinho/index.php">Ver modelos</a>
        </div>
      </div>
    </div>
    <div class="col 14 m3 s12">
     <div class="card sticky-action">
      <div class="card-image">
        <img src="img/calca-jeans.jpg">
        <!-- <span class="card-title">Calça Skinny</span> -->
        <a class="#212121 grey darken-4 btn-floating halfway-fab pulse activator">+</a>
      </div>
      <div class="card-content">
        <p>Calça Jeans Skinny Ripped</p>
      </div>
      <div class="card-reveal">
        <span class="card-title">Oson<i class="right">x</i></span>
        <p>It is a long established fact that a reader will be distracted by the readable content</p>
      </div>
      <div class="card-action #212121 grey darken-4">
        <a href="../../carrinho/index.php">Ver modelos</a>
      </div>
    </div>
  </div>
  <div class="col 14 m3 s12">
   <div class="card sticky-action">
    <div class="card-image">
      <img src="img/saia-jeans.jpg">
      <!-- <span class="card-title">Saia Jeans</span> -->
      <a class="#212121 grey darken-4 btn-floating halfway-fab pulse activator">+</a>
    </div>
    <div class="card-content">
      <p>Saia Jeans Destroyed</p>
    </div>
    <div class="card-reveal">
      <span class="card-title">Oson<i class="right">x</i></span>
      <p>It is a long established fact that a reader will be distracted by the readable content</p>
    </div>
    <div class="card-action #212121 grey darken-4">
      <a href="../../carrinho/index.php">Ver modelos</a>
    </div>
  </div>
</div>
<div class="col 14 m3 s12">
  <div class="card sticky-action">
    <div class="card-image">
      <img src="img/calca-jeans-skinny.jpg">
      <!-- <span class="card-title">Jeans Utilitário</span> -->
      <a class="#212121 grey darken-4 btn-floating halfway-fab pulse activator">+</a>
    </div>
    <div class="card-content">
      <p>Calça Jeans Skinny</p>
    </div>
    <div class="card-reveal">
      <span class="card-title">Oson<i class="right">x</i></span>
      <p>It is a long established fact that a reader will be distracted by the readable content</p>
    </div>
    <div class="card-action #212121 grey darken-4">
      <a href="../../carrinho/index.php">Ver modelos</a>
    </div>
  </div>
</div>
</div>
</div>

<section class="parallax-site" id="Sobre-Hope">
  <div class="background-sobre-hope">
    <div class="container">
      <div class="col-xs-12">
        <h1 class="text-center">Hope Model Carreiras</h1>
        <p class="text-center">
         A Hope Model sabe da importância do desenvolvimento profissional individual para
         o crescimento da companhia. Aqui, os profissionais são reconhecidos pelas suas
         competências e recompenados por suas contribuições. 
       </p>
       <a id="btn-sobre-hope" href="AnimatedPage/QuemSomos.php">Sobre</a>
     </div>
   </div>
 </div>
</section>

<section class="gallery-section-geral" id="gallery">
  <div class="gallery-section">
    <div class="inner-width" id="about">
      <h1>Gallery</h1>
      <div class="border"></div>
      <div class="gallery">

        <a href="#gallery" class="image">
          <img src="img/Hope-14.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-1.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-2.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-13.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-10.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-12.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-11.jpg" alt="">
        </a>

        <a href="#gallery" class="image">
          <img src="img/Hope-9.jpg" alt="">
        </a>

      </div>
    </div>
  </div>
</section>
<section class="parallax-img-site">
  <div class="container">
    <div>
      <div class="col-xs-12">
        <h1 class="text-center">Lorem Ipsum has been</h1>
        <p class="text-center">
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
       </p>
     </div>
   </div>
 </div>
</section>
<section class="clientes contenedor">
  <!-- <h2 class="titulo">Que dicen nuestros clientes</h2> -->


  <h1>Nossos Clientes</h1>
  <div class="border"></div>
  <div class="cards">
    <div class="owl-carousel owl-theme">
      <?php 
      $sql = "SELECT feedback.emailCliente, feedback.comentario, cliente.nome, cliente.img FROM feedback JOIN cliente ON cliente.email = feedback.emailCliente";
      $acao = mysqli_query($conexao, $sql);
      while($array=mysqli_fetch_array($acao)){
        $email = $array["emailCliente"];
        $comentario = $array["comentario"];
        $nome = $array["nome"];
        $img = $array["img"];

        ?>
        <div class="item">
          <div class="card" style="width: 150%;">
            <img src="foto/<?php echo $img; ?>" alt="" style="width: 30%;height: 50%">
            <div class="contenido-texto-card">
              <h5 style="font-size: 20px; color: #FE9A2E"><?php echo  $nome; ?></h5>
              <p style="font-size: 20px;"><br><?php echo utf8_encode($comentario); ?></p>

            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </section>
  <section class="parallax-img-site">
    <div class="container">
      <div>
        <div class="col-xs-12">
          <h1 class="text-center">Lorem Ipsum has been</h1>
          <p class="text-center">
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
         </p>
       </div>
     </div>
   </div>
 </section>
 <section class="info-contact" id="contact">
  <div class="contact-info">
    <div class="inf-card">
      <i class="card-icon fa fa-envelope"></i>
      <p>email@domain.com</p>
    </div>

    <div class="inf-card">
      <i class="card-icon fa fa-phone"></i>
      <p>+000000000000</p>
    </div>

    <div class="inf-card">
      <a href="https://www.google.com.br/maps/place/EEEP+Professora+Luiza+de+Teodoro+Vieira/@-3.890224,-38.6152854,16z/data=!4m5!3m4!1s0x0:0xc53cd84b288208b6!8m2!3d-3.8894191!4d-38.6098288" style="outline: none;color: #fff">
        <i class="card-icon fa fa-map-marker"></i>
        <p>Localização</p>
      </a>
    </div>
  </div>
</section>
<section class="section container" id="contact">
  <div class="row">
    <div class="col s12 l5">
      <h2 class="text-darken-4">Entrar em Contato</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
      <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
      <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
    </div>
    <div class="col s12 l5 offset-l2">
      <form action="index.php" method="POST">
        <div class="input-field">
          <i class="material-icons prefix">message</i>
          <textarea id="message" class="materialize-textarea" cols="20" rows="20" name="comentario"></textarea>
          <label for="message">
          Sua mensagem</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">date_range</i>
          <input type="text" id="date" class="datepicker" name="reclamacao">
          <label for="date">Reclamações</label>
        </div>
        <div class="input-field">
          <p>
           Local:
         </p>

         <p style="margin-right: 13px">
          <label>
            <input type="checkbox" name="atendimentoOn">
            <span>Atendimento online</span>
          </label>
        </p>
        <p>
          <label>
            <input type="checkbox" name="atendimentoOf">
            <span>Atendimento na Loja</span>
          </label>
        </p>
      </div>
      <?php 
      if(isset($_SESSION['login'])){
        ?>
        <div class="input-field center">
          <input class="btn" type="submit" value="Enviar">
        </div>
        <?php }else{
          echo "Para enviar seu feedback é preciso estar logado!";
        }?>

      </form>
    </div>
  </div>
</section>
</main>
<!-- footer -->
<footer class="page-footer grey darken-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5>Sobre a Empresa</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Contatos</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#">Facebook</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Twitter</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Instagram</a></li>
        </ul>
      </div>


    </div>

    <div class="footer-copyright grey darken-4">
      <div class="container center-align">&copy; 2019 Holpe Model</div>
    </div>

  </footer>

  <div id="modal-login" class="modal-login-container">
    <div class="modal-geral">
      <div class="container" style="width: 80%;">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <form class="col s11" method="post" action="LoginErro.php" method="POST">
            <div class='row'>
              <img class="responsive-img" style="width: 130px;" src="img/logo-hope.png" />
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" id="name" name="email">
                <label for="name">Email</label>
              </div>
            </div>
            <div class='row'>
              <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input class='validate' type='password' name='senha' id='password' />
                <label for="pass">Insira sua senha</label>
              </div>
              <label style='float: right;'>
                <a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
              </label>
            </div>
            <br/>
            <div class='row'>
              <button type='submit' name='btn_login' class=' #000000 black btn-large waves-effect indigo'>Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL CADASTRO -->

  <div id="login-modal-cadastro" class="login-container"> 
    <div class="container"  style="justify-content: center; text-align: center; width: 40%;">
      <div class="z-depth-1 grey lighten-4 row" style=" padding: 10px 30px 0px 30px; border: 1px solid #EEE;">
        <form class="col s11" method="post" action="Cadastro.php" enctype="multipart/form-data">
          <div class='row'>
            <img class="responsive-img" style="width: 130px;" src="img/logo-hope.png" />
            <div class='col s12'>
            </div>
          </div>
          <div class='row'>
            <div class="input-field col s6">
              <i class="material-icons prefix">person</i>
              <input type="text" id="none" name="nome">
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input type="email" id="email" name="email">
              <label for="ema">Email</label>
            </div>
          </div>
          <div class='row'>
            <div class="input-field col s12">
              <i class="material-icons prefix">assignment_ind</i>
              <input oninput="mascara(this)" type="text" id="Cpf" name="cpf">
              <label for="name">Cpf</label>
            </div>
          </div>
          <div class='row'>
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
              <input class='validate' type='password' name='senha' id='password' />
              <label for="pass">Insira sua senha</label>
            </div>

          </div>
          <div class='row'>
            <div class="input-field col s12">
              <i class="material-icons prefix">broken_image</i>
              <input class=' #000000 black btn waves-effect indigo' type='file' name="arquivo" id='fotoo' />
              <!-- <label for="fotoo">Adicionar foto ao perfil</label> -->
            </div>

          </div>
          <br/>
          <div class='row'>
            <button type='submit' name='btn_login' class=' #000000 black btn-large waves-effect indigo'>Cadastrar</button>
            <button type='submit' id="fechar-2" class=' #000000 black btn-large waves-effect indigo'>Sair</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- FIM -->




<script type="text/javascript">
  function ModalInicia(IDmodal){
    const Modal = document.getElementById(IDmodal);
    if (Modal) {
      Modal.classList.add('exibe');
      Modal.addEventListener('click', (e) =>{
        if (e.target.id == IDmodal || e.target.id == 'fechar-2'){
          Modal.classList.remove('exibe');
        }; 
      });
    }
  }
  const button1 = document.querySelector('.button1');
  button1.addEventListener('click', () => ModalInicia('login-modal-cadastro'));
</script>



<?php
$conexao->set_charset("utf8");
$comentario = isset($_POST["comentario"])?$_POST["comentario"]:"";
if($comentario==""){
  echo "";
}else{
  $sql = "SELECT *FROM feedback WHERE emailCliente = '".$_SESSION['email']."' AND comentario='$comentario'";
  $acao = mysqli_query($conexao, $sql);

  $linhas = mysqli_num_rows($acao);
  if($linhas!=0){
    echo "";
  }else{
    $sql = "INSERT INTO feedback (comentario, emailCliente) VALUES ('$comentario', '".$_SESSION['email']."')";
    $acao = mysqli_query($conexao, $sql);
  }




}
if(isset($_POST['atendimentoOf']) && isset($_POST['atendimentoOn']) ){
  $reclamacao = isset($_POST['reclamacao'])?$_POST['reclamacao']:"";
  $atendimento1 = "Físico";
  $atendimento2 = "Online";

  $sql = "INSERT INTO reclamacao (reclamacao, emailCliente, atendimento) VALUES ('$reclamacao', '".$_SESSION['email']."', '$atendimento1')";
  $acao = mysqli_query($conexao, $sql);
  $sql = "INSERT INTO reclamacao (reclamacao, emailCliente, atendimento) VALUES ('$reclamacao', '".$_SESSION['email']."', '$atendimento2')";
  $acao = mysqli_query($conexao, $sql);
}


else if (isset($_POST['atendimentoOn'])) {

  $atendimento = "Online";
  $reclamacao = isset($_POST['reclamacao'])?$_POST['reclamacao']:"";
  $sql = "SELECT *FROM reclamacao WHERE emailCliente = '".$_SESSION['email']."' AND reclamacao='$reclamacao'";
  $acao = mysqli_query($conexao, $sql);
  $linhas = mysqli_num_rows($acao);
  if ($linhas!=0) {
    echo "";
  }else{
    $sql = "INSERT INTO reclamacao (reclamacao, emailCliente, atendimento) VALUES ('$reclamacao', '".$_SESSION['email']."', '$atendimento')";
    $acao = mysqli_query($conexao, $sql);
  }
}else if (isset($_POST['atendimentoOf'])){
 $atendimento = "Físico";
 $reclamacao = isset($_POST['reclamacao'])?$_POST['reclamacao']:"";
 $sql = "SELECT *FROM reclamacao WHERE emailCliente = '".$_SESSION['email']."' AND reclamacao='$reclamacao'";
 $acao = mysqli_query($conexao, $sql);
 $linhas = mysqli_num_rows($acao);
 if ($linhas!=0) {
  echo "";
}else{
 $sql = "INSERT INTO reclamacao (reclamacao, emailCliente, atendimento) VALUES ('$reclamacao', '".$_SESSION['email']."', '$atendimento')";
 $acao = mysqli_query($conexao, $sql);
}
}


?>

<script type="text/javascript">
  function IniciaModal(ModalID){
    const modal  =  document.getElementById(ModalID);
    if (modal) {
      modal.classList.add('mostrar');
      modal.addEventListener('click', (evento) => {
        if (evento.target.id == ModalID || evento.target.id == 'fechar') {
          modal.classList.remove('mostrar');
        }
      });
    }
  }
  const button = document.querySelector('.button');
  button.addEventListener('click', () => IniciaModal('modal-login'));
</script>





<!-- LINK JAVASCRIPT -->
<!-- <script type="text/javascript" src="bootstrap/js/jquery.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!--  <script type="text/javascript" src="bootstrap/js/bootstrap.mim.js"></script> -->
<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> -->
<script src="../rellax-master/rellax.js"></script>
<script src="../rellax-master/rellax.mim.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>


<script>

     //CARDS SCRIPT
     document.addEventListener("DOMContentLoaded",function(){
      const gallery = document.querySelectorAll(".materialboxed");
      M.Materialbox.init(gallery,{});
    });
     //FIM CARDS SCRIPT


     //GALLERY
     $(".gallery").magnificPopup({
       delegate: 'a',
       type: 'image',
       gallery:{
         enabled: true
       }
     });
     //FIM GALLERY       
   </script>

   <script type="text/javascript" src="lib/jquery/jquery.js"></script>
   <script type="text/javascript" src="lib/owlCarousel/dist/owl.carousel.min.js"></script>

   <script type="text/javascript">
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 180,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        navText: ["Anterior", "Próximo"],
      dots: false, //desabilitando as duas bolinhas
      responsive: {
        0:{
          items: 1
        },
        360: {
          items: 1
        },
        1000: {items: 3
        }
      }

    });
    });
  </script>

</body>
</html>