<?php
	//Este ficheiro tem informação de como sair da sessão (fazer o logout de uma sessão de login)
	//É feito o redirecionamento para a pagina de login
	session_start();
	
	if(session_destroy())
	{
		header ("Location: login.html");
	}
?>