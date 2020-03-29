<!DOCTYPE html>
<?php 
include_once "conexao.php"
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/d96ecac57c.js" crossorigin="anonymous"></script>

</head>
<body style="background-color: #f1f1f1;">
	<?php 
	class acoes {
		private $nome;
		private $tamanho;
		private $genero;
		private $preco;
		private $quantidade;
		private $id;
		private $src;

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
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
		public function setPreco($preco){
			$this->preco = $preco;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}
		public function getQuantidade(){
			return $this->quantidade;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setSrc($src){
			$this->src = $src;
		}
		public function getSrc(){
			return $this->src;
		}
	}
	?>



	<div class="container" style="margin-top: 40px;">
		<center><h2>Sacola</h2></center>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col" style="display: none;">ID</th>
					<th scope="col">Nome da peça</th>
					<th scope="col">Tamanho da peça</th>
					<th scope="col">Gênero da peça</th>
					<th scope="col">Preço</th>
					<th scope="col">Quantidade</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "select *from carrinho";
				$acao = mysqli_query($conexao, $sql);
				$acoes = new acoes();

				while($array=mysqli_fetch_array($acao)){
					$nome = $array['nome'];
					$tamanho = $array['tamanho'];
					$genero = $array['genero'];
					$preco = $array['preco'];
					$quantidade = $array['quantidadeComprada'];
					$id = $array['id'];
					$src = $array['src'];
					$acoes->setNome($nome);
					$acoes->setTamanho($tamanho);
					$acoes->setGenero($genero);
					$acoes->setPreco($preco);
					$acoes->setQuantidade($quantidade);
					$acoes->setId($id);
					$acoes->setSrc($src);
					?>
					<form action="carrinho.php" method="post">
						

						<tr>
							<td style="display: none;"><input type="text" name="id" value="<?php echo $acoes->getId(); ?>"></td>
							<td><?php echo $acoes->getNome(); ?></td>
							<td><?php echo $acoes->getTamanho(); ?></td>
							<td><?php echo $acoes->getGenero(); ?></td>
							<td><?php echo $acoes->getPreco(); ?></td>
							<td><?php echo $acoes->getQuantidade(); ?></td>
							<td><button class="btn btn-warning btn-sm" style="color: #fff;" ><i class="fas fa-trash-alt"></i>&nbsp;Remover</button></td>
						</tr>
					</form>
					<?php } ?>
					<tr>
						<form action="carrinho.php" method="POST">
							<input type="text" name="aux" value="sim" style="display: none;">
							<td><button class="btn btn-sm" type="submit" style="background-color: #FE9A2E;"><i class="fas fa-shopping-cart"></i>&nbsp;Efetuar Compra</button></td>
							<td><a href="index.php" class="btn btn-sm" style="background-color: #FE9A2E;;"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar mais produtos</a></td>
						</form>
						<td><a href="carrinho.php?desconto=kl38299shwy" class="btn  btn-sm" style="background-color: #FE9A2E;"><i class="fas fa-tags"></i>&nbsp;Aplicar desconto</a></td>
						<td><a href="carrinho.php?cancelar=jsiaeasdueindao93adsas" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i>&nbsp;Cancelar compra</a></td>
						<?php
						include_once "conexao.php";

						$sql = "SELECT *FROM carrinho";
						$acao = mysqli_query($conexao, $sql);

						$valorTotal = 0;
						$quantidadeTotal=0;

						while ($array=mysqli_fetch_array($acao)) {
							$id = $array['id'];
							$preco = $array['preco'];
							$quantidadeComprada = $array['quantidadeComprada'];
							$quantidadeTotal = $quantidadeTotal+$quantidadeComprada;
							$valorTotal = $valorTotal+($preco*$quantidadeComprada);
						}
						$desconto = isset($_GET['desconto'])?$_GET['desconto']:"";
						if ($desconto=="kl38299shwy") {
							if ($quantidadeTotal>3) {
								$valorTotal = $valorTotal-(($valorTotal*20)/100);
								?><td><h4>Total: R$ <?php echo $valorTotal ?></h4></td>
								<?php
							}else{
								?><td><h4>Total: R$ <?php echo $valorTotal ?></h4></td>
								<?php
							}
						}else{
							?><td><h4>Total: R$ <?php echo $valorTotal ?></h4></td><?php
						}

						?>
						
					</tr>

					

				</tbody>
			</table>
		</div>

		<?php
		include_once "conexao.php";

		$sql = "SELECT *FROM carrinho";
		$acao = mysqli_query($conexao, $sql);

		$linhasAfetadas = mysqli_num_rows($acao);
		if ($linhasAfetadas==0) {
			echo "<center><h3>Nenhum produto foi adicionado</h3></center>";
		}

		$id = isset($_POST['id'])?$_POST['id']:"";

		$sql = "SELECT *FROM carrinho WHERE id = '$id'";
		$acao = mysqli_query($conexao, $sql);

		$quantidadeComprada=0;

		while($array=mysqli_fetch_array($acao)){

			$quantidadeComprada=$array['quantidadeComprada'];
			$id = $array['id'];
		}

		$novaQuantidade = $quantidadeComprada-1;

		if ($quantidadeComprada==0) {

			echo "";

		}else{

			$sql = "UPDATE carrinho SET quantidadeComprada = '$novaQuantidade' WHERE id='$id'";
			$acao = mysqli_query($conexao, $sql);

			if ($quantidadeComprada==1) {

				$sql = "DELETE FROM carrinho WHERE id='$id'";
				$acao = mysqli_query($conexao, $sql);

			}

			header("Refresh:0");

		}

		//Aqui será feito a compra, e q quantidade dos produtos será descontada
		//Isso se o valor da variável aux foi 'sim'

		$aux = isset($_POST['aux'])?$_POST['aux']:"teste";
		if ($aux=="sim") {
			$sql = "SELECT *FROM carrinho";
			$acao = mysqli_query($conexao, $sql);
			while($array = mysqli_fetch_array($acao)){
				$id = $array['id'];
				$quantidadeComprada = $array['quantidadeComprada'];

				$sql2 = "SELECT *FROM roupa WHERE id = '$id'";
				$acao2 = mysqli_query($conexao, $sql2);
				while($array2=mysqli_fetch_array($acao2)){
					$quantidadeEstoque = $array2['quantidade'];
					$quantidadeAtualizada = $quantidadeEstoque-$quantidadeComprada;
					$sql3= "UPDATE roupa SET quantidade='$quantidadeAtualizada' WHERE id='$id'";
					$acao3= mysqli_query($conexao, $sql3);
				}
			}

			//Após a compra, a tabela carrinho será truncada

			$sql = "TRUNCATE TABLE carrinho";
			$acao = mysqli_query($conexao, $sql);

			header("location:index.php?comprou=sim");
		}

		//Cancelar compra, aqui a tabela será truncada!

		$cancelar = isset($_GET['cancelar'])?$_GET['cancelar']:"";
		if ($cancelar=='jsiaeasdueindao93adsas') {
			$sql = "TRUNCATE TABLE carrinho";
			$acao = mysqli_query($conexao, $sql);
			header("location:index.php");			
		}




		?>
		
		</body>
		</html>
	