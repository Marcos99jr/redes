<?php
require "./decriptografar.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
	
		$textcif = $_POST['txtcif'];
		$senha = $_POST['senha'];
		
		$textDecif1 = de_cesar($textcif,$senha);
		//echo "</br>.Cesar: ".$textDecif2;
		$textDecif2 = rotacao($textDecif1);
		//echo "</br>."."		Rotação: ".$textDecif1;
		$textDecif3 = De_vigenere($textDecif2,$senha);
		//echo "</br>."."Vigenere: ".$textDecif3;
		
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
				echo "<br><br> Texto Claro: ".$textDecif3;
			}
		?>
	</body>
</html>