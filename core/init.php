<?php
		include 'database/connection.php';
		include 'classes/user.php';
		include 'classes/follow.php';
		include 'classes/tweets.php';
		include 'classes/message.php';


		global $pdo;

		session_start();

		$getFromU = new User($pdo);
		$getFromT = new Tweet($pdo);
		$getFromF = new Follow($pdo);
		$getFromM = new Message($pdo);

		define("BASE_URL", "http://localhost/twitter/");
?>