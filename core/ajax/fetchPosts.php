<?php
	include '../init.php';

	if(isset($_POST['fetchPosts']) && !empty($_POST['fetchPosts'])){
		$user_id   	= $_SESSION['user_id'];
		$limit		= (int) trim($_POST['fetchPosts']);
		$getFromT->tweets($user_id, $limit);
	}
?>