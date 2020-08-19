
<?php

	require_once 'app/Class.php';

	if (isset($_POST['submit'])) {
		# code...
		if (!empty($_POST['admin_no']) && !empty($_POST['admin_pass'])) {
			# code...
			$admin_no = trim($_POST['admin_no']);
			$admin_pass = trim($_POST['admin_pass']);
			// $admin_pwd = trim($_POST['admin_pass']);

			if ($admin_no != "admin"){
				echo "<div class='row'>
				<div class='col-md-4'></div>
				<div class='alert alert-danger alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>×</span>
				</button>
				<i class='fa fa-check mx-2'></i>
				<strong>Wrong!</strong> Check Username/PassWord! </div>
				<div class='col-md-4'></div>
				</div>";
			}else{
				$admin_pwd = md5($admin_pass);
	
				$admin = new Users();
				$admin->admin_login($admin_no, $admin_pwd);
			}
			
			

		} else {
			# code...
			echo "
				<div class='modal fade modalPadding' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog' role='document'>
						<div class='modal-content'>
							<div class='modal-body'>
							<div class='alert alert-danger'>fill all the filed</div
							</div>
						</div>
					</div>

				</div>
			";
		}
		
	} else {
		# code...
	}
	
	
	



?>