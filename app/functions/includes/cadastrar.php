 <?php



	if(isset($_POST['classificacao'])){
		

		$nomeTabela = filter_input(INPUT_POST,'nomeTabela',FILTER_SANITIZE_STRING);
		$classificacao = filter_input(INPUT_POST,'classificacao',FILTER_SANITIZE_STRING);
		$tombamento = filter_input(INPUT_POST,'tombamento',FILTER_SANITIZE_NUMBER_INT);
		$codigoTitulo = filter_input(INPUT_POST,'codigo_titulo',FILTER_SANITIZE_NUMBER_INT);
		$titulo = filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_STRING);
		$autor = filter_input(INPUT_POST,'autor',FILTER_SANITIZE_STRING);
		$localPublicacao = filter_input(INPUT_POST,'local_publicacao',FILTER_SANITIZE_STRING);
		$editora = filter_input(INPUT_POST,'editora',FILTER_SANITIZE_STRING);
		$anoPublicacao = filter_input(INPUT_POST,'ano_publicacao',FILTER_SANITIZE_NUMBER_INT);
		//$qtdExemplares= filter_input(INPUT_POST,'qtd_exemplares',FILTER_SANITIZE_NUMBER_INT);
		

		if(empty(array_filter($_POST))){
			$mensagem = "Todos os campos são obrigatorios";

		}
		else{

			$atributos = [
				'classificacao' => $classificacao,
				'tombamento' => $tombamento,
				'codigo_titulo' => $codigoTitulo,
				'titulo' => $titulo,
				'autor'=> $autor,
				'local_publicacao' => $localPublicacao,
				'editora' => $editora,
				'ano_publicacao' => $anoPublicacao

				

			];

			$cadastrarCliente = cadastrar($nomeTabela,$atributos);

			$mensagem = ($cadastrarCliente) ? ucfirst($nomeTabela)." cadastrado com sucesso!" : "erro ao cadastrar";

		}
	}

	else{

		"Erro ao criar variavel ";
	}


	