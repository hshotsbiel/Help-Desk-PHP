<?php

	session_start();

	/*echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";

	//remover indices do array de sessão - unset()

	unset($_SESSION['x']); //remove o indice apenas se existir
	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";


	//destruir a variável de sessão - session_destroy()

	session_destroy(); // será destruída
	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";*/

	session_destroy();
	header('location: index.php')



?>