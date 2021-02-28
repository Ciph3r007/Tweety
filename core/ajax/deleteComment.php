<?php
	include '../init.php';

	if(isset($_POST['deleteComment']) && !empty($_POST['deleteComment'])){
		$user_id   	= $_SESSION['user_id'];
		$commentID 	= $_POST['deleteComment'];

		$getFromU->delete('comments', array('commentID' => $commentID, 'commentBy' => $user_id));
	}
?>