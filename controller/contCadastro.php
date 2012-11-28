<?php
	
	$nome = $_POST["nome"];
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$retorno = false;

	$password = md5($password);

	$conexao = mysql_connect("127.0.0.1","root","");
	$banco = mysql_select_db("SocialNetwork");
	
	$sqlSelect = "select login from usuario where login = '$usuario'";
	$pesquisa = mysql_query($sqlSelect, $conexao);

	if ($pesquisa) {
		if ($pesquisa = mysql_fetch_array($pesquisa)) {
//			echo "Usuario ".$registro["login"]." ja esta cadastrado!<br />";
			header("location: ../index.php?message=Usuario ".$registro["login"]." ja está cadastrado.");
		}
		else {
			$sqlInclude = "insert into usuario (nome, login, senha, email) values ('$nome','$usuario','$password','$email')";

			$resultado = mysql_query($sqlInclude, $conexao);
			if ($resultado) {
				$numeroRegistros = mysql_affected_rows($conexao);
				echo "Cadastro realizado com sucesso!";
			}
			else {
				echo "falha ao executar o comando";
			}
		}
	}
	mysql_close($conexao);

	//header("location: ../index.php");

?>
