<?php
		function  quantidadeTotalItens($atributos){
			$pdo = conectar();
			$quantidadeRegistros = 0;
		
				try {

					$pdo2 = $pdo->prepare("SELECT * FROM $atributos");
					$pdo2->execute();
					$quantidadeRegistros = $quantidadeRegistros + $pdo2->rowCount();

				} catch (PDOException $e) {

					return $e->getMessage();
					
				}
			
				
		

			return  $quantidadeRegistros;
		}

		function totalRegistros($atributos){

			$pdo = conectar();
			$quantidadeRegistros = 0;

			
			

			for ($i=0; $i < count($atributos); $i++) { 
					
				try {

					$pdo2 = $pdo->prepare("SELECT * FROM $atributos[$i]");
					$pdo2->execute();
					$quantidadeRegistros = $quantidadeRegistros + $pdo2->rowCount();

				} catch (PDOException $e) {

					return $e->getMessage();
					
				}
			
				
		}
			return  $quantidadeRegistros;

		}




	