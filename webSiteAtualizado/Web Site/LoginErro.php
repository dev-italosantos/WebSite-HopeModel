<?php 
include_once "conexao.php";
class Login {
  private $senha;
  private $email;

  public function setSenha($senha){
    $this->senha = $senha;
  }
  public function getSenha(){
    return $this->senha;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
}

class DadosBanco{
  private $senhaBanco;
  private $emailBanco;
  private $nomeBanco;

  public function setSenhaBanco($senhaBanco){
    $this->senhaBanco = $senhaBanco;
  }
  public function getSenhaBanco(){
    return $this->senhaBanco;
  }
  public function setEmailBanco($emailBanco){
    $this->senhaBanco = $senhaBanco;
  }
  public function getEmailBanco(){
    return $this->emailBanco;
  }
  public function setNomeBanco($nomeBanco){
    $this->nomeBanco = $nomeBanco;
  }
  public function getNomeBanco(){
    return $this->nomeBanco;
  }

}
$email = isset($_POST['email'])?$_POST['email']:"";
$senha = md5(isset($_POST['senha'])?$_POST['senha']:"");

$login = new Login();
$dadosBanco = new DadosBanco();
$login->setSenha($senha);
$login->setEmail($email);
$sql = "SELECT *FROM cliente WHERE email='".$login->getEmail()."'";
$acao = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($acao)){
  $dadosBanco->setSenhaBanco($array['senha']);
  $dadosBanco->setNomeBanco($array['nome']);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
  <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="logo_hope_model.png" type="image/x-png">
</head>
<body style="background-color: #f1f1f1;">
 <div class="container" style="justify-content: center; text-align: center; padding: 5%; width: 45%;">
  <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
    <form class="col s12" method="post" action="LoginErro.php">
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
        <?php 
        $linhas = mysqli_num_rows($acao);
        if ($linhas==0) { 
          echo "Email não cadastrado";
        }else{
          if($login->getSenha()!=$dadosBanco->getSenhaBanco()){
            echo "Senha incorreta";
          }else{
            $num = 1;
            session_start();
            $_SESSION['login']=$num;
            $_SESSION['email']=$login->getEmail();
            $_SESSION['nome']=$dadosBanco->getNomeBanco();
            header("Location:index.php");

          }
        }
        ?>
        <label style='float: right;'>
          <a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
        </label>
      </div>
      <br/>
      <div class='row'>
        <button type='submit' name='btn_login' class=' #000000 black btn-large waves-effect indigo'>Login</button>
        <a href="index.php" class="#000000 black btn-large waves-effect indigo">Cadastrar</a>
      </div>
   
    </form>
  </div>
</div>
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
</body>
</html>