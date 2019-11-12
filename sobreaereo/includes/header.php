<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="loading">
<head>

	<title>SobreAéreo</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="SobreAéreo" />
	<meta name="description" content="SobreAéreo">
	<meta name="theme-color" content="#ccff00">


	<!-- fontes: google ou https://transfonter.org/ (gera os @import)-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" /> -->
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />


	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->

</head>
<body>
	<div class="loader" tabindex="-1">
		<img src="img/loader.gif" alt="Carregando...">
	</div>
	<script>
		window.addEventListener('load', function(){
			$('.loader').fadeOut("slow", function(){
				$('html').removeClass('loading');
			})
		});
	</script>

	<header class="header">
		<div class="container">
			<nav class='flexmenu'>
				<a href="./" class="logo" title="SobreAéreo" rel="canonical">
					<img src="img/logo.png" alt="SobreAéreo" title="SobreAéreo" class="logo__pic">
				</a>
				
				<form action="galeria" name="pesquisa-header" class="busca">
					<input type="text" class="busca__campo" placeholder="O que você procura?" required>
					<button type="submit" class="busca__btn" title="Buscar!"> <i class="fas fa-search"></i> </button>
				</form>

				<a href="login" class="menu-item menu-login">
					<i class="fas fa-user"></i>
					<span class="menu-item__texto">Entrar</span>
				</a>
				
				<a href="cart" class="menu-item menu-cart">
					<i class="fas fa-shopping-cart"></i>
					<span class="menu-item__texto">Carrinho</span>
				</a>
			</nav>
			<div class="floatingBtns">
				<a href="cadastro-vendedores" class="menu-item menu-login">
					<i class="fas fa-store"></i>
					<span class="menu-item__texto">Cadastro de vendedores</span>
				</a>
				<a href="cadastro-produtos" class="menu-item menu-login">
					<i class="fas fa-boxes"></i>
					<span class="menu-item__texto">Cadastro de produtos</span>
				</a>
			</div>
		</div>
	</header>
