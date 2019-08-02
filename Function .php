<?php
$sabit=1;

function faktoriyel($a){
	global $sabit;
if($a>1){
	$sabit=$sabit*$a;
	$a--;
	faktoriyel ($a);
	}
	return $sabit;
}

if(function_exists("faktoriyel")){

	echo "fonksiyon var";

}else{
	echo "fonk yok";
}



?>  