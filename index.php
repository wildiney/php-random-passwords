<?php

function geraSenha($limit){
	$str="abcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXZ1234567890";
	$maximo = strlen($str)-1;
	$ret = null;
	
	for($i=0; $i<$limit; $i++){
		$ret .= $str[mt_rand(0,$maximo)];
		}
	return $ret;
	}
	
echo geraSenha(5);