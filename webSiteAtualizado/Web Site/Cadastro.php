<?php

include_once "conexao.php";

class Cadastro{  
  private $nome;
  private $email;
  private $cpf;
  private $senha;

  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getNome(){
    return $this->nome;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setCpf($cpf){
    $this->cpf = $cpf;
  }
  public function getCpf(){
    return $this->cpf;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }
  public function getSenha(){
    return $this->senha;
  }
}

$cadastrando = new Cadastro();
$cadastrando->setNome(isset($_POST['nome'])?$_POST['nome']:"");
$cadastrando->setCpf(isset($_POST['cpf'])?$_POST['cpf']:"");
$cadastrando->setEmail(isset($_POST['email'])?$_POST['email']:"");
$cadastrando->setSenha(md5(isset($_POST['senha'])?$_POST['senha']:""));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
</head>
<body style="background: #f1f1f1;">
  <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="logo_hope_model.png" type="image/x-png">
</body>
<div class="container" style="justify-content: center; text-align: center; padding: 8%;Width: 53%; heigth: 50%;">
  <div class="z-depth-1 grey lighten-4 row" style=" padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
    <form class="col s12" method="post" action="Cadastro.php" enctype="multipart/form-data">
      <div class='row'>
        <img class="responsive-img" style="width: 130px;" src="img/logo-hope.png" />
        <div class='col s17'>
        </div>
      </div>

      <div class='row'>
        <div class="input-field col s12">
          <!-- <i class="material-icons prefix">person</i> -->
          <input type="text" id="none" name="nome">
          <label for="name">Nome</label>
        </div>
      </div>

      <div class='row'>
        <div class="input-field col s12">
          <!-- <i class="material-icons prefix">person</i> -->
          <input type="email" id="email" name="email">
          <label for="ema">Email</label>
        </div>
      </div>

      <div class='row'>
        <div class="input-field col s12">
          <!-- <i class="material-icons prefix">person</i> -->
          <input oninput="mascara(this)" type="text" id="Cpf" name="cpf"> 
          <label for="name">Cpf</label>
        </div>
      </div>
      <div class='row'>
        <div class="input-field col s12">
         <!--  <i class="material-icons prefix">lock</i> -->
         <input class='validate' type='password' name='senha' id='password' />
         <label for="pass">Insira sua senha</label>
       </div>

       <div class='row'>
        <div class="input-field col s12">
          <i class="material-icons prefix">broken_image</i>
          <input type='file' name="arquivo" id='fotoo' />
          <!-- <label for="fotoo">Adicionar foto ao perfil</label> -->
        </div>

      </div>

      <?php 
      if($cadastrando->getNome()==""){
       echo "<h5 style='font-size: 20px;'> Digite seu nome </h5>";
     }else{
      if ($cadastrando->getEmail()=="") {
        echo "<h5 style='font-size: 20px;'> Digite seu email </h5>";
      }else{
        if($cadastrando->getCpf()==""){
         echo "<h5 style='font-size: 20px;'> Digite seu CPF </h5>";
       }else{
        $sql = "SELECT *FROM cliente WHERE email='".$cadastrando->getEmail()."'";
        $acao = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($acao);
        if ($linhas>0) {
         echo "<h5 style='font-size: 20px;'> Email já cadastrado no Sistema </h5>";
       }else{
        $sql = "SELECT *FROM cliente WHERE cpf='".$cadastrando->getCpf()."'";
        $acao = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($acao);
        if ($linhas>0) {
          echo "<h5 style='font-size: 20px;'> CPF já cadastrado no Sistema </h5>";
        }else{
          if ($cadastrando->getSenha()=="") {
            echo "<h5 style='font-size: 20px;'>Digite sua senha</h5>";
          }else{
           $arquivo  = $_FILES['arquivo']['name'];

            //Pasta onde o arquivo vai ser salvo
           $_UP['pasta'] = 'foto/';

      //Tamanho máximo do arquivo em Bytes
            $_UP['tamanho'] = 1024*1024*100; //5mb
            
      //Array com a extensões permitidas
            $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
            
      //Renomeiar
            $_UP['renomeia'] = false;
            
      //Array com os tipos de erros de upload do PHP
            $_UP['erros'][0] = 'Não houve erro';
            $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
            $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
            $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
            $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
            
      //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
            if($_FILES['arquivo']['error'] != 0){
              die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
                exit; //Para a execução do script
              }
              
            //Faz a verificação da extensao do arquivo
              $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
              if(array_search($extensao, $_UP['extensoes'])=== false){    
                echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webSiteAtualizado/Web%20Site/Cadastro.php'>
                <script type=\"text/javascript\">
                alert(\"A imagem não foi cadastrada, extensão inválida.\");
                </script>
                ";
              }
              
            //Faz a verificação do tamanho do arquivo
              else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
                echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webSiteAtualizado/Web%20Site/Cadastro.php'>
                <script type=\"text/javascript\">
                alert(\"Arquivo muito grande.\");
                </script>
                ";
              }
              
      //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
              else{
        //Primeiro verifica se deve trocar o nome do arquivo
                if($UP['renomeia'] == true){
          //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
                  $nome_final = time().'.jpg';
                }else{
          //mantem o nome original do arquivo
                  $nome_final = $_FILES['arquivo']['name'];
                }
        //Verificar se é possivel mover o arquivo para a pasta escolhida
                if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
          //Upload efetuado com sucesso, exibe a mensagem
                  $query = mysqli_query($conexao, "INSERT INTO cliente (nome, cpf, email, senha, img)
                    VALUES('".$cadastrando->getNome()."', '".$cadastrando->getCpf()."', '".$cadastrando->getEmail()."', '".$cadastrando->getSenha()."', '$nome_final')");
                  session_start();
                  $_SESSION['email'] = $cadastrando->getEmail();
                  session_destroy();
                  echo "
                  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webSiteAtualizado/Web%20Site/index.php'>
              
                  ";  
                }else{
          //Upload não efetuado com sucesso, exibe a mensagem
                  echo "
                  <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/webSiteAtualizado/Web%20Site/Cadastro.php'>
                  ";
                }
              }
            }
          }
        }

      }


    }
  }
  ?>
</div>
<br/>
<div class='row'>
  <button type='submit' name='btn_login' class=' #000000 black btn-large waves-effect indigo'>Cadastrar</button>
  <button type='submit' id="fechar" class=' #000000 black btn-large waves-effect indigo'>Sair</button>
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
  <script type="text/javascript">
  	function mascara(i) {
  		var v = i.value;
  		if (isNaN(v[v.length-11])) {
  			i.value = v.substring(0, v.length-1);
  			return;
  		}
  		i.setAttribute("maxlength", "14");
  		if (v.length == 3 || v.length == 7) i.value += ".";
  		if (v.length == 11 ||) i.value += "-";

  	}
  </script>
  </html>