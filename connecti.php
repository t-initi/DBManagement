<?php
function connect_i(){
	$server = 'localhost';
$username = 'root';
 $password = '';
 $database = 'societe' ;
$co = new mysqli($server,$username,$password,$database ) ;
if($co->connect_errno){
	echo $co->connect_error;
	//die("Error");

}
return $co;
}

?>