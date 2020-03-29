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
$email = $_POST['email'];
$senha = $_POST['senha'];

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta charset="utf-8"/>
    <title>Hope Model</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="email" name="email">
        <input type="password" name="senha">
        <input type="submit" name="" value="login">
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
    </form>
</body>