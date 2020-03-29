<!DOCTYPE html>
<?php 
include_once "conexao.php";
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Carrinho</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/d96ecac57c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="lib/owlCarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="lib/owlCarousel/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	
	<style type="text/css">
	form{
		display: inline-block;
	}
</style>
</head>
<body style="background-color: #f1f1f1;">

</div>

<div class="owl-carousel owl-theme">
	<?php 
	session_start();
	$sql = "SELECT *FROM roupa";
	$acao = mysqli_query($conexao, $sql);

	while($array = mysqli_fetch_array($acao)){
		$id = $array['id'];
		$nome = $array['nome'];
		$genero = $array['genero'];
		$tamanho = $array['tamanho'];
		$preco = $array['preco'];
		$quantidadeEstoque = $array['quantidade'];
		$src = $array['src'];
		?>
		<div class="item">
			<form action="index.php" method="post">
				<td>
					<div class="card sticky-action" style="max-width: 15rem;">
						<div class="card-image">
							<img src="<?php echo $src ?>" style="width: 100%;">
							<!-- <span class="card-title">short jeans</span> -->
							<a class=" #212121 grey darken-4 btn-floating halfway-fab pulse activator" style="color:#fff;text-align:center;">+</a>
						</div>
						<div class="card-content">

							<p><h5 style="font-size: 20px;"><?php echo $nome ?></h5></p>
							<input type="text" name="nome" value="<?php echo $nome ?>" style="display: none;">
							<input type="text" name="id" value="<?php echo $id ?>" style="display: none;">
							<input type="text" name="src" value="<?php echo $src ?>" style="display: none;">
							<input type="text" name="tamanho" value="<?php echo $tamanho ?>" style="display: none;">
							<input type="text" name="genero" value="<?php echo $genero ?>" style="display: none;">
							<p><h5>R$ <?php echo $preco; ?></h5></p>
							<input type="text"  value="<?php echo $preco ?>" name="preco" style="display: none;">
							<input type="number" name="quantidadeAdicionada">
						</div>
						<div class="card-reveal">
							<span class="card-title">Detalhes<i class="right">x</i></span>
							<p>Calça jeans de modelagem mom, ou seja, cintura alta com pernas
								levemente ajustadas. Conta com bolsos frontais tradicionais e apenas
								um posterior, cós com passantes e braguilha com fechamentoem botão. 
							</p>
						</div>
						<div class="card-action #212121 grey darken-4">
							<button class="btn" style="background:	#FE9A2E;">Comprar</button>
						</div>
					</div>
				</td>
			</form>
		</div>
		<?php }?>
	</div>
	<button class="btn" style="border-radius: 100%;width: 170px;height: 170px; background-color: black; margin-left: 970px;position: absolute;margin-top: 10px;">
		<h4 style="color:#FE9A2E; ">30%</h4><h5 style="font-size: 15px;color: #FE9A2E;"> de desconto na compra de 4 ou mais peças!</h5>
	</button>
	<a href="carrinho.php" class="btn btn-sm" style="margin-left: 100px;background-color:#FE9A2E; "><i class="fas fa-shopping-cart"></i>&nbsp;Sacola</a>
	<?php
	class cadastroP{
		private $nome;
		private $src;
		private $preco;
		private $quantidadeAdicionada;
		private $quantidadeEstoque;
		private $novaQuantidade;
		private $tamanho;
		private $genero;
		private $id;

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setSrc($src){
			$this->src = $src;
		}
		public function getSrc(){
			return $this->src;
		}
		public function setPreco($preco){
			$this->preco = $preco;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function setQuantidadeAdicionada($quantidadeAdicionada){
			$this->quantidadeAdicionada = $quantidadeAdicionada;
		}
		public function getQuantidadeAdicionada(){
			return $this->quantidadeAdicionada;
		}
		public function setQuantidadeEstoque($quantidadeEstoque){
			$this->quantidadeEstoque = $quantidadeEstoque;
		}
		public function getQuantidadeEstoque(){
			return $this->quantidadeEstoque;
		}
		public function setNovaQuantidade($novaQuantidade){
			$this->novaQuantidade=$novaQuantidade;
		}
		public function getNovaQuantidade(){
			return $this->novaQuantidade;
		}

		public function setTamanho($tamanho){
			$this->tamanho = $tamanho;
		}
		public function getTamanho(){
			return $this->tamanho;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function cadastrandoValores(){
			global $conexao;
			$nome = isset($_POST['nome']) ? $_POST['nome']:"";
			$src = isset($_POST['src']) ? $_POST['src']:"";
			$preco = isset($_POST['preco']) ? $_POST['preco']:"";
			$quantidadeAdicionada = isset($_POST['quantidadeAdicionada'])?$_POST['quantidadeAdicionada']:"teste";
			$tamanho = isset($_POST['tamanho']) ? $_POST['tamanho']:"";
			$genero = isset($_POST['genero']) ? $_POST['genero']:"";
			$id = isset($_POST['id'])?$_POST['id']:"";

			$this->setNome($nome);
			$this->setSrc($src);
			$this->setPreco($preco);
			$this->setGenero($genero);
			$this->setQuantidadeAdicionada(intval($quantidadeAdicionada));
			$this->setTamanho($tamanho);
			$this->setId($id);
			if ($quantidadeAdicionada=="teste") {
				echo "";
			}
			else if ($quantidadeAdicionada < 1) {
				echo "<p><h5 style='font-size:20px; margin-left:100px;color:#FE9A2E;'>Não insira uma quantidade abaixo de 1</h5></p>";
			}else{
				if(!isset($_SESSION['login'])){
					echo "<h5 style='font-size:20px;margin-top:-20px; margin-left:450px;color:#FE9A2E;'>Faça seu login para poder adquirir nossos produtos! <br> <br> <a class='btn' href='../webSiteAtualizado/Web Site/LoginErro.php' style='background-color:black;margin-left:180px;'>Entrar</a></h5>";
				}else{
					$sql = "SELECT *FROM roupa WHERE nome = '".$this->getNome()."'";
					$acao = mysqli_query($conexao, $sql);

					while ($array = mysqli_fetch_array($acao)) {
						$id = $array['id'];
						$nome = $array['nome'];
						$genero = $array['genero'];
						$tamanho = $array['tamanho'];
						$preco = $array['preco'];
						$this->setQuantidadeEstoque($array['quantidade']);
					}
					if ($quantidadeAdicionada>$this->getQuantidadeEstoque()) {

						echo "<p><h5 style='font-size:20px; margin-left:100px;color:#FE9A2E;'>Estoque insuficiente, temos ao todo '".$this->getQuantidadeEstoque()."' peças dessas</h5></p>";
					}else{
						$sql = "SELECT *FROM carrinho WHERE id = '".$this->getId()."'";
						$acao = mysqli_query($conexao, $sql);

						while ($array = mysqli_fetch_array($acao)) {
							$id = $array['id'];
						}
						$linhas = mysqli_num_rows($acao);
						if ($linhas>0) {
							$sql = "SELECT *FROM carrinho WHERE id = '".$this->getId()."'";
							$acao = mysqli_query($conexao, $sql);

							while ($array=mysqli_fetch_array($acao)) {
								$quantidadeCarrinho = $array['quantidadeComprada'];
							}
							$novaQuantidade = $this->getQuantidadeAdicionada()+$quantidadeCarrinho;
							$this->setNovaQuantidade($novaQuantidade);

							$sql = "UPDATE carrinho SET quantidadeComprada = '".$this->getNovaQuantidade()."' WHERE id = '".$this->getId()."' ";
							$acao = mysqli_query($conexao, $sql);



						}else{
							$sql = "INSERT INTO carrinho (id, nome, genero, tamanho, preco, quantidadeComprada, src) VALUES ('".$this->getId()."', '".$this->getNome()."', '".$this->getGenero()."', '".$this->getTamanho()."', '".$this->getPreco()."', '".$this->getQuantidadeAdicionada()."', '".$this->getSrc()."')";
							$acao = mysqli_query($conexao, $sql);

						}
					}
				}


			}

		} 
	}


	$comprou = isset($_GET['comprou'])?$_GET['comprou']:"";
	if ($comprou=="sim") {
		echo "<p><h5 style='font-size:20px; margin-left:100px;color:#FE9A2E;'>Compra efetuada com sucesso</h5></p>";
	}


	$inserir = new cadastroP();
	$inserir->cadastrandoValores();



	?>

	<footer class="page-footer grey darken-3" style="margin-top: 160px;">
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
	<script type="text/javascript" src="lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="lib/owlCarousel/dist/owl.carousel.min.js">

	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				items: 4,
				loop: true,
				margin: 10,
				nav: true,
				navText: ["Anterior", "Próximo"],
			dots: false, //desabilitando as duas bolinhas
			responsive: {
				0:{
					items: 1
				},
				360: {
					items: 3
				},
				1000: {items: 5
				}
			}

		});
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>