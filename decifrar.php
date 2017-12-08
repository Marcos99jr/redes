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
		<link rel="stylesheet" href="./css/de_style.css"/>
	</head>
	<body>
		<div class="center">
		<p1>Digite seu texto criptografado</p1>
		<form action="decifrar.php" method="post" id="form">
			<textarea class="caixa" rows="5" name="txtcif" form="form" forcols="200"></textarea>	
			<label class="senha" for="senha"/> Senha
			<input type="text" name="senha"/><br>
			<input class="crip"	 type="submit" value="Descriptografar"/>
		</form>
		<a class="des" href="cifrar.php"> Criptografar</a>
		<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				echo "<div class='result'><span> Texto Cifrado:<br><br> </span>".$textDecif3;
			}
		?>
		</div>
	</body>
</html>