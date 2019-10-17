<html>
	<head>
		<meta charset="utf-8">
		<title>Portfolio</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estilo.css">
		<script type="text/javascript" src="js/script.js"></script>
		<link rel="icon" type="imagem/png" href="img/trex.png" />
	</head>
	<body>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="row cabecalho">
					<div class="btn-group">
						<button class="btn btn-secondary">Início</button>
						<button class="btn btn-secondary">Portfólios</button>
						<button class="btn btn-secondary">Pesquisar</button>
<?php
	include "php\login.php";
	//if usuario deslogado
?>
						<button class="btn btn-secondary" id="botao_modal" onClick="modal_entrar('fundo_modal');modal_entrar('formulario');">Entrar</button>
						<div class="fundo_modal" id="fundo_modal" onClick="modal_entrar('fundo_modal');modal_entrar('formulario');">
						</div>
						<form class="formulario form-group" id="formulario" action="#" method="post">
							<center><label>..::Entrar::..</label></center>
							<label>E-mail:</label><input type="text" class="form-control" name="entrar_email"><br>
							<label>Senha:</label><input type="password" class="form-control" name="entrar_senha"><br>
							<center><input type="submit" class="btn btn-danger" name="botao" value="Entrar"></center>
						</form>

						<button class="btn btn-secondary" id="botao_modal" onClick="modal_entrar('fundo_modal_cadastro');modal_entrar('formulario_cadastro');">Cadastrar</button>
						<div class="fundo_modal_cadastro" id="fundo_modal_cadastro" onClick="modal_entrar('fundo_modal_cadastro');modal_entrar('formulario_cadastro');">
						</div>
						<form class="formulario_cadastro form-group" id="formulario_cadastro" action="#" method="post">
							<center><label>..::Cadastrar::..</label></center>
							<label>E-mail:</label><input type="text" class="form-control" name="entrar_email"><br>
							<label>Senha:</label><input type="password" class="form-control" name="entrar_senha"><br>
							<center><input type="submit" class="btn btn-danger" name="botao" value="Cadastrar"></center>
						</form>
<?php
	//if usuario logado
?>
						<button class="btn btn-secondary">Usuário</button>
						<button class="btn btn-secondary">Sair</button>
<?php
	//termina if
?>
					</div>
				</div>

				<div class="row col-12 teste">

				</div>

				<div class="row col-12 rodape">

				</div>
			</div>
		</div>
	</body>
</html>
