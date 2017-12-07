<?php
require "./criptografar.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$textc = $_POST['txtc'];
		$senha = $_POST['senha'];
		
		$textCif = vigenere($textc,$senha);
		//echo "<br/> Saiu Vigenere: ".$textCif;
		$textCif2 = rotacao($textCif);
		//echo "<br /> Saiu rotacao: ".$textCif3;
		$textCif3 = cesar($textCif2,$senha);
		//echo "<br />Saiu  Cesar: ".$textCif2;
		

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
		<a href="decifrar.php"> Descriptografar</a>
		<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				echo "<br><br> Texto Cifrado: ".$textCif3;
			}
		?>
	</body>
</html>