<?php

	function conectar(){

		try {

			$pdo = new PDO('mysql:dbhost=localhost;dbname=biblioteca;','root','');
			
		} catch (PDOException  $e) {
			echo $e->getMessage();
		}

		return $pdo;


	}