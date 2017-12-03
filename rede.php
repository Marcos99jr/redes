<?php 
$text="Oi Marcos";
$senha="pains";
$tmg_senha=strlen($senha );
//cifra de cesar
$letras = array(    'a' => 1,
					'b' => 2,
					'c' => 3,
					'd' => 4,
					'e' => 5,
					'f' => 6,
					'g' => 7,
					'h' => 8,
					'i' => 9,
					'j' => 10,
					'k' => 11,
					'l' => 12,
					'm' => 13,
					'n' => 14,
					'o' => 15,
					'p' => 16,
					'q' => 17,
					'r' => 18,
					's' => 19,
					't' => 20,
					'u' => 21,
					'v' => 22,
					'w' => 23,
					'x' => 24,
					'y' => 25,
					'z' => 26,
					' ' => 27);
	
	$letraT = array(1 => 'a',
					2 => 'b',
					3 => 'c',
					4 => 'd',
					5 => 'e',
					6 => 'f',
					7 => 'g',
					8 => 'h',
					9 => 'i',
					10 => 'j',
					11 => 'k',
					12 => 'l',
					13 => 'm',
					14 => 'n',
					15 => 'o',
					16 => 'p',
					17 => 'q',
					18 => 'r',
					19 => 's',
					20 => 't',
					21 => 'u',
					22 => 'v',
					23 => 'w',
					24 => 'x',
					25 => 'y',
					26 => 'z',
					27 => ' ');
	foreach($letras as $indice => $values){
		if($values + $tmg_senha >27){
				$letras[$indice]= $tmg_senha - (27 -$values);
			}else{
				$letras[$indice]= $values +$tmg_senha;
			}
		
	}
	var_dump($letras);
	$text_array=str_split($text);
	$o=0;
	foreach($text_array as $indice => $values){
		foreach($letras as $indiceL => $number){
			if($indiceL==$values){
				
				foreach($letraT as $number_c => $letra_r){
					if($number_c==$number){
						$text1[$o]=$letra_r;
						$o++;
					}
					
				}
			}
			
		}
		
	}
	var_dump($text1);
	
	m
	
?>