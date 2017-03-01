<?php

class Objeto{
	
	function __construct($arreglo = ""){
		 
		 if($arreglo != ""){
			 foreach ($arreglo as $id => $valor){
				 $this->$id = $valor;
			 }	
		 }
	}
	
	function __set($id, $valor){
		
		$this->$id = $valor;
	}
	
	function __get($variable){
		
		if(!isset($this->$variable)){
			return "";
		}
		return $this->$variable;
	}
}