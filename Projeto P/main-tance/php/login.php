<?php
if (@$_REQUEST['botao']=="Entrar"){
	if(@$_POST['entrar_email'] != "" && @$_POST['entrar_senha'] != ""){
		include "php\config.php";
		$result = mysqli_query($con,"SELECT * FROM usuario WHERE login='".$_POST['entrar_email']."' AND senha='".md5($_POST['entrar_senha'])."';");
		if(mysqli_num_rows($result)>0){
			session_start();

			$coluna=mysqli_fetch_assoc($result);
			$_SESSION["loginUsuario"] = $coluna["login"];
			$_SESSION["nomeUsuario"]= $coluna["nome"];
			$_SESSION["usuarioNivel"] = $coluna["nivelAcesso"];


			header('location: index.php?pag=principal');
		}else{
			echo "<script>alert('Preencha os campos corretamente!')</script>";
		}
	}else{
		echo "<script>alert('Preencha os campos com seu login!')</script>";
	}
}else if(@$_REQUEST['botao']=="Cadastrar"){
	
	if(){
		mysqli_query($con,"INSERT INTO usuario(login,nome,senha,nivelAcesso) VALUES('".$_POST['loginCadastro']."','".$_POST['nomeCadastro']."','".md5($_POST['senhaCadastro'])."','".$_POST['nivelAcesso']."');");
		echo "<script>alert('Cadastrado com sucesso!')</script>";
	}else{
		echo "<script>alert('Usuário já cadastrado.')</script>";
	}
}


