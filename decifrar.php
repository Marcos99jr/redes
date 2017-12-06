<?php
require "./decriptografar.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
	
		$textcif = $_POST['txtcif'];
		$senha = $_POST['senha'];
		
		$textDecif = rotacao($textcif);
		//$textDecif = de_cesar($textDecif,$senha);
		$textDecif = De_vigenere($textDecif,$senha);
		
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="decifrar.php" method="post">
			<label for="texto"/> Texto Cifrado
			<input type="text" name="txtcif"/><br>
			<label for="senha"/> Senha
			<input type="text" name="senha"/><br>
			<input type="submit" value="Descriptografar"/>
		</form>
		<a href="cifrar.php"> Criptografar</a>
		<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				echo "<br><br> Texto Claro: ".$textDecif;
			}
		?>
	</body>
</html>