<?php
	
	require_once 'app/Class.php';


	if (isset($_POST['delete_id'])) {
		# code...
		$user_id = $_POST['delete_id'];
		
		if($user_id){
			$del_user = new Users();
			$del_user->delete_user($user_id);
		}

	}

?>