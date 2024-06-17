<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página WEB - Sessão de Usuário 2</title>
</head>
<body>
	<?php 

		session_start();

		$_SESSION['nome'] = "Administrador";

		//elimina todas as variáveis da sessão mas mantém a sessão ativa.
		session_unset();

		//elimina toda a sessão;
		//session_destroy();

	 ?>
	 <h3>Sessão de Usuário</h3>
	 Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>
	 
</body>
</html>