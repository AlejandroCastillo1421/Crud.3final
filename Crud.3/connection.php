<?php

$dsn = 'mysql:dbname=mipc_29349553_php_sql_cours;host=sql209.mipropia.com';
$user = 'mipc_29349553';
$password = 'Ale1421';

try{

	$pdo = new PDO( $dsn,
		            $user,
		            $password
	                );
	

}catch( PDOException $e ){
	echo 'Error al conectarnos: ' . $e->getMessage();
}