<?php
require "./decriptografar.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
	
		$textcif = $_POST['txtcif'];
		$senha = $_POST['senha'];
		
		$textDecif = De_vigenere($textcif,$senha);
		echo "<br> Texto Claro: ".$textDecif;
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="decifrar.php" method="post">
			<label for="texto"/> Texto Claro
			<input type="text" name="txtcif"/><br>
			<label for="senha"/> Senha
			<input type="text" name="senha"/><br>
			<input type="submit" value="Decriptografar"/>
		</form>
		<a href="cifrar.php"> Criptografar</a>
	</body>
</html>