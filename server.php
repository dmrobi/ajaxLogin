<?php
if (isset($_POST["passkey"])){
	$password = $_POST["passkey"];
	$userid = $_POST["username"];

	$database = file_get_contents("database.txt");

	$pairs = explode("-", $database);
	$loggedin = 0;
	for($i=0; $i<5; $i++){
		$user = explode(":", $pairs[$i]);
		if(($user[0] == $userid) && ($user[1] == $password)){
			echo "Welcome, " . $user[0] . "<br/><h1>Members Area!!</h1>";
			$loggedin = 1;
		}
	}

	if($loggedin != 1){
		echo "wrong";
	}
}
?>