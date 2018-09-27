<!DOCTYPE html>
<html>
	<head>
		<title>Ofertômetro</title>
		<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!--Bootstrap-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>

        <!--Personal-->
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<header>
			<h1>Ofertômetro</h1>
			<h2>Aqui diminuímos o seu gasto e você aumenta a nossa nota!</h2>
		</header>
		<nav>
			<li><a href="index.php">Criar Cupom</a></li>
			<li><a href="validate.php">Validar Cupom</a></li>
		</nav>

		<div id="ins-status">Aguardando</div>

		<div id="main">
			<div id="form-container">
				<p>
					<select id="estab-sel">
					</select>
					Ou <input type="text" name="ins-estab" placeholder="Adicionar um novo">
				</p>
				<p>
					<input type="radio" name="oferta-type" value="P">
					<label>Produto</label>
					<input type="radio" name="oferta-type" value="S">
					<label>Serviço</label>
				</p>
				<section id="hidden-form-sec" style="display:none;">
					<p>
						<select id="oferta-sel">
						</select>
						Ou <input type="text" name="ins-oferta" placeholder="Adicionar um novo" >
					</p>
					<p>
						<input type="number" name="prc-off" placeholder="Desconto (em %)">
					</p>
					<p>
						<button id="main-button">Registrar</button>
					</p>
				</section>
			</div>
			<div id="table-container">
				<table>
				</table>
			</div>
		</div>
	</body>
</html>