<?php require "config.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
	<title>Sistema Biblioteca CRBA - BETA</title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	  <link rel="icon" href="assets/img/icon/fundacentro.ico" />
	  <script type="text/javascript" src="assets/js/jQuery.js"></script>
	  <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
	<div class="container card-panel teal lighten-2">
		<figure>
			<img src=""> 
		</figure>

		<!-- Pensar em um cabeçalho legal-->
		
	</div>
	

	<div class="container body ">
		
	<div class="botoes">
			<a href="?p=home" class="blue darken-4 btn"> <i class="mdi-action-home"></i>&nbsp&nbspInicio </a>
			<a href="?p=cadastrar" class="waves-effect waves-light btn"> <i class="mdi-editor-border-color"></i>&nbspCadastrar</a>
			<a href="?p=relatorios" class="waves-effect waves-light btn"> <i class="
mdi-action-assignment"></i>&nbspRelatorios</a>


	</div>
	<p><?php echo isset($mensagem) ? $mensagem : ""; ?></p>
	<div id="conteudo"> <?php  alterarPagina(); ?></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	</div>

</body>
</html>