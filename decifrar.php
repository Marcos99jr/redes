<?php
require "./decriptografar.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		function hexToStr($hex){
			$string='';
			for ($i=0; $i < strlen($hex)-1; $i+=2){
				$string .= chr(hexdec($hex[$i].$hex[$i+1]));
			}
			return $string;
		}
		
	
		$textcif = $_POST['txtcif'];
		$senha = $_POST['senha'];
		
	
		$textcif = str_replace(" ","",$textcif);
		$textc = hexToStr($textcif);
		$textDecif1 = rotacao($textc);
		//echo "</br>."." Rotação: ".$textDecif1;
		$textDecif2 = de_cesar($textDecif1,$senha);
		//echo "</br>.Cesar: ".$textDecif2;
		$textDecif3 = De_vigenere($textDecif2,$senha);
		//echo "</br>."."Vigenere: ".$textDecif3;
		
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/style.css"/>
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