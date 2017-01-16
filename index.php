<?php

class StrUtils {
	private $_str = "";

	public function __construct($string){
		$this -> _str = $string;
	}
	public function toString(){
		return $this -> _str;
	}
	public function bold(){
		$this -> _str ='<strong>' . $this -> _str . '</strong>';
		return $this -> _str;
	}
	public function italic(){
		$this -> _str = '<em>' . $this -> _str . '</em>';
		return $this -> _str;
	}
	public function underline(){
		$this -> _str = '<u>' . $this -> _str . '</u>';
		return $this -> _str;
	}
	public function capitalize(){
		$this -> _str = ucfirst($this -> _str);
		return $this -> _str;
	}
}

$maPhrase = new StrUtils("j'aime Michèle");
echo $maPhrase -> toString();
//echo $maPhrase -> bold();
//echo $maPhrase -> italic();
//echo $maPhrase -> underline();
echo $maPhrase -> capitalize();