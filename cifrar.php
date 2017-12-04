<?php
require "./funcoes.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$textc = $_POST['txtc'];
		$senha = $_POST['senha'];
		
		$textCif = vigenere($textc,$senha);
		echo $textCif;
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="cifrar.php" method="post">
			<label for="texto"/> Texto Claro
			<input type="text" name="txtc"/><br>
			<label for="senha"/> Senha
			<input type="text" name="senha"/><br>
			<input type="submit" value="Criptografar"/>
		</form>
	</body>
</html>