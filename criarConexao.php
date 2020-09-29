<?php
header('Access-Control-Allow-Origin: *');
function criarConexao(){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "cadastroLivros";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or  die("Connection failed");

	//echo "Connected!<br><br>";
	return $connection;
}

?>