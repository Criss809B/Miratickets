<?php
session_start();
date_default_timezone_set("America/Santo_Domingo");
define('SALT', 'rN9.s77@ZUiW25.');
// serialize
// unserialize

// Usuarios
function getUsuario(){
	
	return "";
}

function login($usuario, $clave, $cookie = false){
	
	$clave = $clave.SALT;
}
// Fin Usuarios