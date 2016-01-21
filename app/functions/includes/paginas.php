<?php

	function alterarPagina(){
		$include = filter_input(INPUT_GET,'p' ,FILTER_SANITIZE_STRING);
		$pagina = (!is_null($include) ? $include : 'home');

		$includePagina = "includes/".$pagina.".php";
		$erro404 = "includes/erro404.php";

		require (is_file($includePagina)) ? $includePagina : $erro404;

	}