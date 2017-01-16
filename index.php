<?php

class StrUtils {
	private $_str = "";

	public function __construct($string){
		$this -> _str = $string;
	}
	public function toString(){
		return $this -> _str;
	}
}

$maPhrase = new StrUtils("J'aime Michèle");
echo $maPhrase -> toString();
