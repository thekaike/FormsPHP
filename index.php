<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut iconn"  type="image/x-icon" href="image/logo.pn">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema Corpy</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header class="cabecalho">
		<div class="cabecalho-container">
			<img src="image/logo.png" alt="Logotipo da empresa">
			<nav class=menu>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">Produtos</a></li>
					<li><a href="index.php?pagina=cadastro">Clientes</a></li>
					<li><a href="index.php">Sobre-Nós</a></li>
					<li><a href="index.php">Minha Conta</a></li>
					<li><a href="index.php">Carrinho</a></li>
				</ul>
			</nav>
		</div>
	</header>



<main class="conteudo">
	<?php 
	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

	switch ($pagina) {
	 	case 'cadastro':
	 		include 'cadastro_clientes.php';
	 		break;
	 	case 'sucesso':
	 		include 'cadastro_clientes.php';
	 		break;
	 	default:
	 		echo "<h1>Conteudo Home </h1>";
	 		echo "<p>Bem-Vindo ao Sistema Corpi!</p>";
	 		break;
	 } ?>
</main>

<footer class="rodape">
	<h3>Sistema Corpy</h3>
	<p>&copy; Todos os direitos reservados </p>
	<span>Técnico em desenvolvimento de sistemas</span>
</footer>
</body>
</html>