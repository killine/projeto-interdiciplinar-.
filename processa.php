<?php
	session_start();
 	include 'conecta.php';

 	$nome = $_POST['nome'];
 	$senha= $_POST['senha'];

 	$consulta = "SELECT * FROM cliente WHERE nome = '$nome' AND senha = '$senha'";
 	$resultado = $conexao->query($consulta);

 	$registros = $resultado->num_rows;
 	$resultado_usuario = MySQLi_fetch_assoc($resultado);
 	//utilizaremos $resultado_usuario para criar SESSÃO no php...

 	if ($registros == 1) {

		 $_SESSION['codCli'] = $resultado_usuario ['codCli'];
		 $_SESSION['nome'] = $resultado_usuario ['nome'];
 		header('Location: restrita.php');
 	}

 	else{
 		header('Location: index.html');
 	}
?>