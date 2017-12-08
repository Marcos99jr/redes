<?php
require "./criptografar.php";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		function strToHex($string){
			$hex='';
			for ($i=0; $i < strlen($string); $i++){
				$hex .= dechex(ord($string[$i]));
			}
			return $hex;
		}
		function hexToStr($hex){
			$string='';
			for ($i=0; $i < strlen($hex)-1; $i+=2){
				$string .= chr(hexdec($hex[$i].$hex[$i+1]));
			}
			return $string;
		}
		
		$textc = $_POST['txtc'];
		$senha = $_POST['senha'];
		
		$textCif = vigenere($textc,$senha);
		//echo "<br/> Saiu Vigenere: ".$textCif;
		$textCif2 = cesar($textCif,$senha);
		//echo "<br />Saiu  Cesar: ".$textCif2;
		$textCif3 = rotacao($textCif2);
		//echo "<br /> Saiu rotacao: ".$textCif3;
		
		
		$textFinal = strToHex($textCif3);
		$textFinal = str_split($textFinal,8);
		$textCif3 ='';
		foreach($textFinal as $indice => $string){
			if($indice != count($textFinal)){
				$textCif3.= $string;
			}
			$textCif3.= " ";
		}
		

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