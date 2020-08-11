<?php
	
	session_start();


	//variavel que verifica se a autentificação foi realizada
	$usuario_autentificacao = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');
	

	//usuarios do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
	);

	foreach ($usuarios_app as $user) {
		
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autentificacao = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

		if($usuario_autentificacao) {
			echo "Usuario autentificado";
			$_SESSION['autentificado'] = 'SIM';
			$_SESSION['id'] = $usuario_id;
			$_SESSION['perfil_id'] = $usuario_perfil_id;
			header('location: home.php');
		} else {
			$_SESSION['autentificado'] = 'NAO';
			header('location: index.php?login=erro');
		}
	
?>