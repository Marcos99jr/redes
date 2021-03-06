	<?php
//Descriptografar

//Vigenere
	function De_vigenere($textcif,$senha){
		$tabela = array(
		'a'=> array(
			'a'=> 'a',
			'b'=> 'b',
			'c'=> 'c',
			'd'=> 'd',
			'e'=> 'e',
			'f'=> 'f',
			'g'=> 'g',
			'h'=> 'h',
			'i'=> 'i',
			'j'=> 'j',
			'k'=> 'k',
			'l'=> 'l',
			'm'=> 'm',
			'n'=> 'n',
			'o'=> 'o',
			'p'=> 'p',
			'q'=> 'q',
			'r'=> 'r',
			's'=> 's',
			't'=> 't',
			'u'=> 'u',
			'v'=> 'v',
			'w'=> 'w',
			'x'=> 'x',
			'y'=> 'y',
			'z'=> 'z',
			' '=> '-'
		),
		'b'=> array(
			'a'=> 'b',
			'b'=> 'c',
			'c'=> 'd',
			'd'=> 'e',
			'e'=> 'f',
			'f'=> 'g',
			'g'=> 'h',
			'h'=> 'i',
			'i'=> 'j',
			'j'=> 'k',
			'k'=> 'l',
			'l'=> 'm',
			'm'=> 'n',
			'n'=> 'o',
			'o'=> 'p',
			'p'=> 'q',
			'q'=> 'r',
			'r'=> 's',
			's'=> 't',
			't'=> 'u',
			'u'=> 'v',
			'v'=> 'w',
			'w'=> 'x',
			'x'=> 'y',
			'y'=> 'z',
			'z'=> 'a',
			' '=> '-'
		),
		'c'=> array(
			'a'=> 'c',
			'b'=> 'd',
			'c'=> 'e',
			'd'=> 'f',
			'e'=> 'g',
			'f'=> 'h',
			'g'=> 'i',
			'h'=> 'j',
			'i'=> 'k',
			'j'=> 'l',
			'k'=> 'm',
			'l'=> 'n',
			'm'=> 'o',
			'n'=> 'p',
			'o'=> 'q',
			'p'=> 'r',
			'q'=> 's',
			'r'=> 't',
			's'=> 'u',
			't'=> 'v',
			'u'=> 'w',
			'v'=> 'x',
			'w'=> 'y',
			'x'=> 'z',
			'y'=> 'a',
			'z'=> 'b',
			' '=> '-'
		),
		'd'=> array(
			'a'=> 'd',
			'b'=> 'e',
			'c'=> 'f',
			'd'=> 'g',
			'e'=> 'h',
			'f'=> 'i',
			'g'=> 'j',
			'h'=> 'k',
			'i'=> 'l',
			'j'=> 'm',
			'k'=> 'n',
			'l'=> 'o',
			'm'=> 'p',
			'n'=> 'q',
			'o'=> 'r',
			'p'=> 's',
			'q'=> 't',
			'r'=> 'u',
			's'=> 'v',
			't'=> 'w',
			'u'=> 'x',
			'v'=> 'y',
			'w'=> 'z',
			'x'=> 'a',
			'y'=> 'b',
			'z'=> 'c',
			' '=> '-'
		),
		'e'=> array(
			'a'=> 'e',
			'b'=> 'f',
			'c'=> 'g',
			'd'=> 'h',
			'e'=> 'i',
			'f'=> 'j',
			'g'=> 'k',
			'h'=> 'l',
			'i'=> 'm',
			'j'=> 'n',
			'k'=> 'o',
			'l'=> 'p',
			'm'=> 'q',
			'n'=> 'r',
			'o'=> 's',
			'p'=> 't',
			'q'=> 'u',
			'r'=> 'v',
			's'=> 'w',
			't'=> 'x',
			'u'=> 'y',
			'v'=> 'z',
			'w'=> 'a',
			'x'=> 'b',
			'y'=> 'c',
			'z'=> 'd',
			' '=> '-'
		),
		'f'=> array(
			'a'=> 'f',
			'b'=> 'g',
			'c'=> 'h',
			'd'=> 'i',
			'e'=> 'j',
			'f'=> 'k',
			'g'=> 'l',
			'h'=> 'm',
			'i'=> 'n',
			'j'=> 'o',
			'k'=> 'p',
			'l'=> 'q',
			'm'=> 'r',
			'n'=> 's',
			'o'=> 't',
			'p'=> 'u',
			'q'=> 'v',
			'r'=> 'w',
			's'=> 'x',
			't'=> 'y',
			'u'=> 'z',
			'v'=> 'a',
			'w'=> 'b',
			'x'=> 'c',
			'y'=> 'd',
			'z'=> 'e',
			' '=> '-'
		),
		'g'=> array(
			'a'=> 'g',
			'b'=> 'h',
			'c'=> 'i',
			'd'=> 'j',
			'e'=> 'k',
			'f'=> 'l',
			'g'=> 'm',
			'h'=> 'n',
			'i'=> 'o',
			'j'=> 'p',
			'k'=> 'q',
			'l'=> 'r',
			'm'=> 's',
			'n'=> 't',
			'o'=> 'u',
			'p'=> 'v',
			'q'=> 'w',
			'r'=> 'x',
			's'=> 'y',
			't'=> 'z',
			'u'=> 'a',
			'v'=> 'b',
			'w'=> 'c',
			'x'=> 'd',
			'y'=> 'e',
			'z'=> 'f',
			' '=> '-'
		),
		'h'=> array(
			'a'=> 'h',
			'b'=> 'i',
			'c'=> 'j',
			'd'=> 'k',
			'e'=> 'l',
			'f'=> 'm',
			'g'=> 'n',
			'h'=> 'o',
			'i'=> 'p',
			'j'=> 'q',
			'k'=> 'r',
			'l'=> 's',
			'm'=> 't',
			'n'=> 'u',
			'o'=> 'v',
			'p'=> 'w',
			'q'=> 'x',
			'r'=> 'y',
			's'=> 'z',
			't'=> 'a',
			'u'=> 'b',
			'v'=> 'c',
			'w'=> 'd',
			'x'=> 'e',
			'y'=> 'f',
			'z'=> 'g',
			' '=> '-'
		),
		'i'=> array(
			'a'=> 'i',
			'b'=> 'j',
			'c'=> 'k',
			'd'=> 'l',
			'e'=> 'm',
			'f'=> 'n',
			'g'=> 'o',
			'h'=> 'p',
			'i'=> 'q',
			'j'=> 'r',
			'k'=> 's',
			'l'=> 't',
			'm'=> 'u',
			'n'=> 'v',
			'o'=> 'w',
			'p'=> 'x',
			'q'=> 'y',
			'r'=> 'z',
			's'=> 'a',
			't'=> 'b',
			'u'=> 'c',
			'v'=> 'd',
			'w'=> 'e',
			'x'=> 'f',
			'y'=> 'g',
			'z'=> 'h',
			' '=> '-'
			
		),
		'j'=> array(
			'a'=> 'j',
			'b'=> 'k',
			'c'=> 'l',
			'd'=> 'm',
			'e'=> 'n',
			'f'=> 'o',
			'g'=> 'p',
			'h'=> 'q',
			'i'=> 'r',
			'j'=> 's',
			'k'=> 't',
			'l'=> 'u',
			'm'=> 'v',
			'n'=> 'w',
			'o'=> 'x',
			'p'=> 'y',
			'q'=> 'z',
			'r'=> 'a',
			's'=> 'b',
			't'=> 'c',
			'u'=> 'd',
			'v'=> 'e',
			'w'=> 'f',
			'x'=> 'g',
			'y'=> 'h',
			'z'=> 'i',
			' '=> '-'
			
		),
		'k'=> array(
			'a'=> 'k',
			'b'=> 'l',
			'c'=> 'm',
			'd'=> 'n',
			'e'=> 'o',
			'f'=> 'p',
			'g'=> 'q',
			'h'=> 'r',
			'i'=> 's',
			'j'=> 't',
			'k'=> 'u',
			'l'=> 'v',
			'm'=> 'w',
			'n'=> 'x',
			'o'=> 'y',
			'p'=> 'z',
			'q'=> 'a',
			'r'=> 'b',
			's'=> 'c',
			't'=> 'd',
			'u'=> 'e',
			'v'=> 'f',
			'w'=> 'g',
			'x'=> 'h',
			'y'=> 'i',
			'z'=> 'j',
			' '=> '-'
		),
		'l'=> array(
			'a'=> 'l',
			'b'=> 'm',
			'c'=> 'n',
			'd'=> 'o',
			'e'=> 'p',
			'f'=> 'q',
			'g'=> 'r',
			'h'=> 's',
			'i'=> 't',
			'j'=> 'u',
			'k'=> 'v',
			'l'=> 'w',
			'm'=> 'x',
			'n'=> 'y',
			'o'=> 'z',
			'p'=> 'a',
			'q'=> 'b',
			'r'=> 'c',
			's'=> 'd',
			't'=> 'e',
			'u'=> 'f',
			'v'=> 'g',
			'w'=> 'h',
			'x'=> 'i',
			'y'=> 'j',
			'z'=> 'k',
			' '=> '-'			
		),
		'm'=> array(
			'a'=> 'm',
			'b'=> 'n',
			'c'=> 'o',
			'd'=> 'p',
			'e'=> 'q',
			'f'=> 'r',
			'g'=> 's',
			'h'=> 't',
			'i'=> 'u',
			'j'=> 'v',
			'k'=> 'w',
			'l'=> 'x',
			'm'=> 'y',
			'n'=> 'z',
			'o'=> 'a',
			'p'=> 'b',
			'q'=> 'c',
			'r'=> 'd',
			's'=> 'e',
			't'=> 'f',
			'u'=> 'g',
			'v'=> 'h',
			'w'=> 'i',
			'x'=> 'j',
			'y'=> 'k',
			'z'=> 'l',
			' '=> '-'
			
		),
		'n'=> array(
			'a'=> 'n',
			'b'=> 'o',
			'c'=> 'p',
			'd'=> 'q',
			'e'=> 'r',
			'f'=> 's',
			'g'=> 't',
			'h'=> 'u',
			'i'=> 'v',
			'j'=> 'w',
			'k'=> 'x',
			'l'=> 'y',
			'm'=> 'z',
			'n'=> 'a',
			'o'=> 'b',
			'p'=> 'c',
			'q'=> 'd',
			'r'=> 'e',
			's'=> 'f',
			't'=> 'g',
			'u'=> 'h',
			'v'=> 'i',
			'w'=> 'j',
			'x'=> 'k',
			'y'=> 'l',
			'z'=> 'm',
			' '=> '-'
			
		),
		'o'=> array(
			'a'=> 'o',
			'b'=> 'p',
			'c'=> 'q',
			'd'=> 'r',
			'e'=> 's',
			'f'=> 't',
			'g'=> 'u',
			'h'=> 'v',
			'i'=> 'w',
			'j'=> 'x',
			'k'=> 'y',
			'l'=> 'z',
			'm'=> 'a',
			'n'=> 'b',
			'o'=> 'c',
			'p'=> 'd',
			'q'=> 'e',
			'r'=> 'f',
			's'=> 'g',
			't'=> 'h',
			'u'=> 'i',
			'v'=> 'j',
			'w'=> 'k',
			'x'=> 'l',
			'y'=> 'm',
			'z'=> 'n',
			' '=> '-'
		),
		'p'=> array(
			'a'=> 'p',
			'b'=> 'q',
			'c'=> 'r',
			'd'=> 's',
			'e'=> 't',
			'f'=> 'u',
			'g'=> 'v',
			'h'=> 'x',
			'i'=> 'x',
			'j'=> 'y',
			'k'=> 'z',
			'l'=> 'a',
			'm'=> 'b',
			'n'=> 'c',
			'o'=> 'd',
			'p'=> 'e',
			'q'=> 'f',
			'r'=> 'g',
			's'=> 'h',
			't'=> 'i',
			'u'=> 'j',
			'v'=> 'k',
			'w'=> 'l',
			'x'=> 'm',
			'y'=> 'n',
			'z'=> 'o',
			' '=> '-'
		),
		'q'=> array(
			'a'=> 'q',
			'b'=> 'r',
			'c'=> 's',
			'd'=> 't',
			'e'=> 'u',
			'f'=> 'v',
			'g'=> 'w',
			'h'=> 'x',
			'i'=> 'y',
			'j'=> 'z',
			'k'=> 'a',
			'l'=> 'b',
			'm'=> 'c',
			'n'=> 'd',
			'o'=> 'e',
			'p'=> 'f',
			'q'=> 'g',
			'r'=> 'h',
			's'=> 'i',
			't'=> 'j',
			'u'=> 'k',
			'v'=> 'l',
			'w'=> 'm',
			'x'=> 'n',
			'y'=> 'o',
			'z'=> 'p',
			' '=> '-'
		),
		'r'=> array(
			'a'=> 'r',
			'b'=> 's',
			'c'=> 't',
			'd'=> 'u',
			'e'=> 'v',
			'f'=> 'w',
			'g'=> 'x',
			'h'=> 'y',
			'i'=> 'z',
			'j'=> 'a',
			'k'=> 'b',
			'l'=> 'c',
			'm'=> 'd',
			'n'=> 'e',
			'o'=> 'f',
			'p'=> 'g',
			'q'=> 'h',
			'r'=> 'i',
			's'=> 'j',
			't'=> 'k',
			'u'=> 'l',
			'v'=> 'm',
			'w'=> 'n',
			'x'=> 'o',
			'y'=> 'p',
			'z'=> 'q',
			' '=> '-'
		),
		's'=> array(
			'a'=> 's',
			'b'=> 't',
			'c'=> 'u',
			'd'=> 'v',
			'e'=> 'w',
			'f'=> 'x',
			'g'=> 'y',
			'h'=> 'z',
			'i'=> 'a',
			'j'=> 'b',
			'k'=> 'c',
			'l'=> 'd',
			'm'=> 'e',
			'n'=> 'f',
			'o'=> 'g',
			'p'=> 'h',
			'q'=> 'i',
			'r'=> 'j',
			's'=> 'k',
			't'=> 'l',
			'u'=> 'm',
			'v'=> 'n',
			'w'=> 'o',
			'x'=> 'p',
			'y'=> 'q',
			'z'=> 'r',
			' '=> '-'
		),
		't'=> array(
			'a'=> 't',
			'b'=> 'u',
			'c'=> 'v',
			'd'=> 'w',
			'e'=> 'x',
			'f'=> 'y',
			'g'=> 'z',
			'h'=> 'a',
			'i'=> 'b',
			'j'=> 'c',
			'k'=> 'd',
			'l'=> 'e',
			'm'=> 'f',
			'n'=> 'g',
			'o'=> 'h',
			'p'=> 'i',
			'q'=> 'j',
			'r'=> 'k',
			's'=> 'l',
			't'=> 'm',
			'u'=> 'n',
			'v'=> 'o',
			'w'=> 'p',
			'x'=> 'q',
			'y'=> 'r',
			'z'=> 's',
			' '=> '-'
		),
		'u'=> array(
			'a'=> 'u',
			'b'=> 'v',
			'c'=> 'w',
			'd'=> 'x',
			'e'=> 'y',
			'f'=> 'z',
			'g'=> 'a',
			'h'=> 'b',
			'i'=> 'c',
			'j'=> 'd',
			'k'=> 'e',
			'l'=> 'f',
			'm'=> 'g',
			'n'=> 'h',
			'o'=> 'i',
			'p'=> 'j',
			'q'=> 'k',
			'r'=> 'l',
			's'=> 'm',
			't'=> 'n',
			'u'=> 'o',
			'v'=> 'p',
			'w'=> 'q',
			'x'=> 'r',
			'y'=> 's',
			'z'=> 't',
			' '=> '-'
		),
		'v'=> array(
			'a'=> 'v',
			'b'=> 'w',
			'c'=> 'x',
			'd'=> 'y',
			'e'=> 'z',
			'f'=> 'a',
			'g'=> 'b',
			'h'=> 'c',
			'i'=> 'd',
			'j'=> 'e',
			'k'=> 'f',
			'l'=> 'g',
			'm'=> 'h',
			'n'=> 'i',
			'o'=> 'j',
			'p'=> 'k',
			'q'=> 'l',
			'r'=> 'm',
			's'=> 'n',
			't'=> 'o',
			'u'=> 'p',
			'v'=> 'q',
			'w'=> 'r',
			'x'=> 's',
			'y'=> 't',
			'z'=> 'u',
			' '=> '-'
		),
		'w'=> array(
			'a'=> 'w',
			'b'=> 'x',
			'c'=> 'y',
			'd'=> 'z',
			'e'=> 'a',
			'f'=> 'b',
			'g'=> 'c',
			'h'=> 'd',
			'i'=> 'e',
			'j'=> 'f',
			'k'=> 'g',
			'l'=> 'h',
			'm'=> 'i',
			'n'=> 'j',
			'o'=> 'k',
			'p'=> 'l',
			'q'=> 'm',
			'r'=> 'n',
			's'=> 'o',
			't'=> 'p',
			'u'=> 'q',
			'v'=> 'r',
			'w'=> 's',
			'x'=> 't',
			'y'=> 'u',
			'z'=> 'v',
			' '=> '-'
		),
		'x'=> array(
			'a'=> 'x',
			'b'=> 'y',
			'c'=> 'z',
			'd'=> 'a',
			'e'=> 'b',
			'f'=> 'c',
			'g'=> 'd',
			'h'=> 'e',
			'i'=> 'f',
			'j'=> 'g',
			'k'=> 'h',
			'l'=> 'i',
			'm'=> 'j',
			'n'=> 'k',
			'o'=> 'l',
			'p'=> 'm',
			'q'=> 'n',
			'r'=> 'o',
			's'=> 'p',
			't'=> 'q',
			'u'=> 'r',
			'v'=> 's',
			'w'=> 't',
			'x'=> 'u',
			'y'=> 'v',
			'z'=> 'w',
			' '=> '-'
		),
		'y'=> array(
			'a'=> 'y',
			'b'=> 'z',
			'c'=> 'a',
			'd'=> 'b',
			'e'=> 'c',
			'f'=> 'd',
			'g'=> 'e',
			'h'=> 'f',
			'i'=> 'g',
			'j'=> 'h',
			'k'=> 'i',
			'l'=> 'j',
			'm'=> 'k',
			'n'=> 'l',
			'o'=> 'm',
			'p'=> 'n',
			'q'=> 'o',
			'r'=> 'p',
			's'=> 'q',
			't'=> 'r',
			'u'=> 's',
			'v'=> 't',
			'w'=> 'u',
			'x'=> 'v',
			'y'=> 'w',
			'z'=> 'x',
			' '=> '-'
		),
		'z'=> array(
			'a'=> 'z',
			'b'=> 'a',
			'c'=> 'b',
			'd'=> 'c',
			'e'=> 'd',
			'f'=> 'e',
			'g'=> 'f',
			'h'=> 'g',
			'i'=> 'h',
			'j'=> 'i',
			'k'=> 'j',
			'l'=> 'k',
			'm'=> 'l',
			'n'=> 'm',
			'o'=> 'n',
			'p'=> 'o',
			'q'=> 'p',
			'r'=> 'q',
			's'=> 'r',
			't'=> 's',
			'u'=> 't',
			'v'=> 'u',
			'w'=> 'v',
			'x'=> 'w',
			'y'=> 'x',
			'z'=> 'y',
			' '=> '-'
		)
	);

	$textcif = trim($textcif);
	$textcif = str_split($textcif);
	$tamTxt = count($textcif);
	$strTxt = '';
	
	for($i=0;$i<$tamTxt;$i++){
		/*if($textcif[$i]== ' '){
			unset($textcif[$i]);
		}
		else{*/
			$strTxt.= $textcif[$i];
		//}
	}
	
	
	//echo "<br>".$strTxt;
	$bloco = strlen($senha);
	$arrayTxt = str_split($strTxt,$bloco);
	
	$textDecif='';
	//echo "<br> Senha: ".$senha;

	foreach($arrayTxt as $i => $value){
		
		$tam = strlen($value);
		for($i=0;$i<$tam;$i++){
			$charS = $senha[$i];
			foreach($tabela as $linha => $coluna){
				if($linha == $charS){
					foreach($coluna as $indice => $valor){
						if($value[$i] != "&"){
							if($value[$i] == $valor){
								$charAdd = $indice;
								break;
							}
						}
						else{
							$charAdd = ' ';
							break;
						}
					}
				}
				
			}
			$textDecif .= $charAdd;
			
		}
		
	}
	for($i=strlen($textDecif)-1;$i>=0;$i--){
		if($textDecif[$i] == 'y'){
			$textDecif[$i] = '';
		}
		else{
			break;
		}
	}
	
	return $textDecif;
}

// Rotação
function rotacao($text){
	$text=str_split($text);
	$tmn=count($text);
	for($i=$tmn-1;$i>=0;$i--){
	
			$text1[$i-1]=$text[$i];
	
	}		
	
	$text1=$str = implode("", $text1);
		
	return $text1;

}

//descriptografar
function de_cesar($textc,$senha){
	$textc = trim($textc);
	//$textc = str_split($textc);
	$tamTxt = count($textc);
	
	for($i=0;$i<$tamTxt;$i++){
		if($textc[$i]== " "){
			unset($textc[$i]);
		}
		
	}
	
	$alfabeto = array(	0 => 'a',
						1 => 'b',
						2 => 'c',
						3 => 'd',
						4 => 'e',
						5 => 'f',
						6 => 'g',
						7 => 'h',
						8 => 'i',
						9 => 'j',
						10 => 'k',
						11 => 'l',
						12 => 'm',
						13 => 'n',
						14 => 'o',
						15 => 'p',
						16 => 'q',
						17 => 'r',
						18 => 's',
						19 => 't',
						20 => 'u',
						21 => 'v',
						22 => 'w',
						23 => 'x',
						24 => 'y',
						25 => 'z',
						26 => '&',
						27 => ' ');
	$textc = trim($textc);
	//$textc = str_split($textc);
	$tamTxt = count($textc);
	
	for($i=0;$i<$tamTxt;$i++){
		if($textc[$i]==' '){
			unset($textc[$i]);
		}
		
	}
	
	$arraySenha = str_split($senha);
   //tirar letra repitido da senha
  
	$arraySenha=array_unique($arraySenha);
		   
   //echo "<br> Senha: ".$senha;
   $newAlfabeto = array_merge($arraySenha,$alfabeto);
   $newAlfabeto =array_unique($newAlfabeto);
   $i=0;
   foreach($newAlfabeto as $indice => $values){
	   $newAlfabeto1[$i]=$values;
	   $i++;
   }
   
     /*echo "<pre>";
   print_r($newAlfabeto1);*/
   
   
   //criptografar
   $textCif = '';
   for($i=0;$i<=strlen($textc)-1;$i++){
	   $char = $textc[$i];
	   foreach($newAlfabeto1 as $indice => $letra){
		   if($letra == $char){
			   $textCif.= $alfabeto[$indice];
		   }
		   
	   }
   }
    return $textCif;
 }
 

?>