<?php 

class General{
	public function seo($str, $options = array())
	{
		$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
		$defaults = array(
			'delimiter' => '-',
			'limit' => null,
			'lowercase' => true,
			'replacements' => array(),
			'transliterate' => true
		);
		$options = array_merge($defaults, $options);
		$char_map = array(

        // Latin symbols
			'©' => '(c)',

        // AZ
			'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G','Ə' => 'E',
			'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g','ə' => 'e',


		);
		$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
		if ($options['transliterate']) {
			$str = str_replace(array_keys($char_map), $char_map, $str);
		}
		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
		$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
		$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
		$str = trim($str, $options['delimiter']);
		return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
	}

	public function Tarix($x)
	{
		$tarix = substr($x,0,10);
		$ay = explode("-",$tarix);
		$aylar = array("Yanvar","Fevral","Mart","Aprel","May","İyun","İyul","Avqust","Sentyabr","Oktyabr","Noyabr","Dekabr");
		$y_ay = $ay[1];
		for ($i=0; $i < 12 ; $i++) { 
			if ($y_ay[0]=="0" && $y_ay[1]==($i+1)) {
				//$ytarix = $ay[0]." ".$aylar[$i]." ".$ay[2];
				$ytarix = $ay[2]."-".$aylar[$i]."-".$ay[0];
				return $ytarix;
			}
			else if($y_ay[0]!="0" && $y_ay==($i+1)){
				//$ytarix = $ay[0]." ".$aylar[$i]." ".$ay[2];
				$ytarix = $ay[2]."-".$aylar[$i]."-".$ay[0];
				return $ytarix;
			}
		}

	}

}


?>