<?php

$host = '<hostname>';
$user = '<db_username>';
$pass = '<db_password>';
$db_name = '<database_name>';

if($con = mysqli_connect($host,$user,$pass,$db_name)){
	return true;
}
else{
	echo "no connections available";
}

?>
