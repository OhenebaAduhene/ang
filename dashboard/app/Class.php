<?php

	class Users{	
		
		private $limit = 5;
				
		// Admin login
		public function admin_login( $admin_no, $admin_pwd ){
			session_start();
			include 'config/server.php';

			$sql = "SELECT admin_id,admin_no,admin_pass FROM admin WHERE admin_no = :admin_no";

			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':admin_no', $admin_no);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);	

			$admin_id = $row['admin_id'];
			$admin_no = $row['admin_no'];
			$admin_pass = $row['admin_pass'];	

			if ($row === false) {
				$err = "<div class='alert alert-success alert-dismissible fade show mb-0' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>×</span>
				</button>
				<i class='fa fa-check mx-2'></i>
				<strong>Success!</strong> Your profile has been updated! </div>";
			} else {

				if ($admin_pwd === $admin_pass) {

					$_SESSION['admin_id'] = $row['admin_id'];
					$_SESSION['logged_in'] = time();
					$pass = "admin";

					
					//Redirect to protected page, home.php
					if ($row['admin_pass'] === md5($pass)){
						header('Location: change_password.php');
					}else{
						header('Location: users.php');
					}
					
					exit;
				} else {

					echo "<div class='row'>
					<div class='col-md-4'></div>
					<div class='alert alert-danger alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>×</span>
					</button>
					<i class='fa fa-check mx-2'></i>
					<strong>Wrong!</strong> Username/Password </div>
					<div class='col-md-4'></div>
					</div>";
				}
				
			}	
			
		} // End of login
			

		// Controlling user table
		public function user_table(){
			include "config/server.php";

			$limit = $this->limit;

			if (isset($_GET["page"])) {
				$page  = $_GET["page"]; 
			} 
			else{ 
				$page=1;
			};  
			$start_from = ($page-1) * $limit;  

			$query = "SELECT user_id,name,nick,email,occupation,location,phone,m_status,sex FROM usertable ORDER BY user_id ASC LIMIT $start_from, $limit";
			$stmt = $pdo->query($query);	

			echo '
			<table class="table" style="background-color: #fff;">
			<thead class="thead-dark">
			<tr>
			
			<th scope="col" name="user_id">#</th>
			<th scope="col" name="name">Name</th>
			<th scope="col" name="email">Email</th>
			<th scope="col" name="occupation">Occupation</th>
			<th scope="col" name="location">Location</th>		
			<th scope="col" name="phone">Phone</th>		
			<th scope="col" name="nick">Nickname</th>		
			<th scope="col" name="m_status">Marital Status</th>		
			<th scope="col" name="sex">Gender</th>		
			<th scope="col"></th>
			<th scope="col"></th>
			</tr>
			</thead>
			';

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$user_id = $row['user_id'];
				$name = $row['name'];
				$email = $row['email'];
				$occup = $row['occupation'];
				$loc = $row['location'];
				$phone = $row['phone'];
				$nick = $row['nick'];
				$status = $row['m_status'];
				$gender = $row['sex'];
								
				
				echo'
				<tbody>
				<tr>
				<td>'.$user_id.'</td>
				<td>'.$name.'</td>
				<td>'.$email.'</td>
				<td>'.$occup.'</td>
				<td>'.$loc.'</td>
				<td>'.$phone.'</td>
				<td>'.$nick.'</td>
				<td>'.$status.'</td>
				<td>'.$gender.'</td>
				
				<td><a href="?update_id=' . $row['user_id'] . '" class="btn btn-primary" name="update"  data-toggle="modal" data-target="#updateUser' . $row['user_id'] . '">Edit</a></td>
				<td><a href="?delete_id=' . $row['user_id'] . '" class="btn btn-warning" name="delete"  data-toggle="modal" data-target="#deleteUser' . $row['user_id'] . '">Delete</a></td>

				</tr>

				</tbody>

				<!--Update Modal-->
				<form class="form-group" method="POST" action="">
				<div class="modal fade" id="updateUser'. $row['user_id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Update User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				<input type="hidden" name="update_id" value="'. $user_id .'">
				<label>Location</label>
				<input type="text" name="location" class="form-control" value="'. $loc .'" required><br>
				<label>Phone</label>
				<input type="number" name="phone" class="form-control"  value="'. $phone .'" required><br>
				<label>Email</label>
				<input type="text" name="email" class="form-control"  value="'. $email .'" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br>

				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				<button type="submit" class="btn btn-primary" name="btn_update">Yes</button>
				</div>
				</div>
				</div>
				</div>
				<!--Update Modal-->

				<!--Delete Modal -->
				<form class="form-group" method="POST" action="">
				<div class="modal fade" id="deleteUser'. $row['user_id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 90px">
				<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header" style="background: #212529">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body" style="text-align: center;">
				Are You Sure You Want To Delete?
				<input type="hidden" name="delete_id" value="'. $user_id .'">
				</div>
				<div class="modal-footer" style="background: #E9ECEF">
				<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				<button type="submit" class="btn btn-primary" name="delete">Yes</button>
				</div>
				</div>
				</div>
				</div>
				</form>
				<!--Delete Modal -->
				
				';
			}
			echo '</table>';

			$this->myPagination();
		} // End of user table control

	
		// Controlling user table
		public function fada_table(){
			include "config/server.php";

			$limit = $this->limit;

			if (isset($_GET["page"])) {
				$page  = $_GET["page"]; 
			} 
			else{ 
				$page=1;
			};  
			$start_from = ($page-1) * $limit;  

			$query = "SELECT user_id,f_name,f_occup,f_loc,f_phone,name FROM usertable ORDER BY user_id ASC LIMIT $start_from, $limit";
			$stmt = $pdo->query($query);	

			echo '
			<table class="table" style="background-color: #fff;">
			<thead class="thead-dark">
			<tr>
			
			<th scope="col" name="user_id">#</th>
			<th scope="col" name="f_name">Father\'s Name</th>
			<th scope="col" name="f_loc">Location</th>
			<th scope="col" name="f_occup">Occupation</th>
			<th scope="col" name="f_phone">Phone</th>		
			<th scope="col" name="name">Member Name</th>				
			</tr>
			</thead>
			';

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$user_id = $row['user_id'];
				$f_name = $row['f_name'];
				$f_loc = $row['f_loc'];
				$f_occup = $row['f_occup'];
				$f_phone = $row['f_phone'];
				$name = $row['name'];
				
								
				
				echo'
				<tbody>
				<tr>
				<td>'.$user_id.'</td>
				<td>'.$f_name.'</td>
				<td>'.$f_loc.'</td>
				<td>'.$f_occup.'</td>
				<td>'.$f_phone.'</td>
				<td>'.$name.'</td>
				
				';
			}
			echo '</table>';

			$this->myPagination();
		} // End of user table control

		public function mada_table(){
			include "config/server.php";

			$limit = $this->limit;

			if (isset($_GET["page"])) {
				$page  = $_GET["page"]; 
			} 
			else{ 
				$page=1;
			};  
			$start_from = ($page-1) * $limit;  

			$query = "SELECT user_id,m_name,m_occup,m_loc,m_phone,name FROM usertable ORDER BY user_id ASC LIMIT $start_from, $limit";
			$stmt = $pdo->query($query);	

			echo '
			<table class="table" style="background-color: #fff;">
			<thead class="thead-dark">
			<tr>
			
			<th scope="col" name="user_id">#</th>
			<th scope="col" name="m_name">Mother\'s Name</th>
			<th scope="col" name="m_loc">Location</th>
			<th scope="col" name="m_occup">Occupation</th>
			<th scope="col" name="m_phone">Phone</th>		
			<th scope="col" name="name">Member Name</th>				
			
			</tr>
			</thead>
			';

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$user_id = $row['user_id'];
				$m_name = $row['m_name'];
				$m_loc = $row['m_loc'];
				$m_occup = $row['m_occup'];
				$m_phone = $row['m_phone'];
				$name = $row['name'];
				
								
				
				echo'
				<tbody>
				<tr>
				<td>'.$user_id.'</td>
				<td>'.$m_name.'</td>
				<td>'.$m_loc.'</td>
				<td>'.$m_occup.'</td>
				<td>'.$m_phone.'</td>
				<td>'.$name.'</td>
			
				
				';
			}
			echo '</table>';

			$this->myPagination();
		}

		
    	public function exportCSV() {
			include 'config/server.php';
			//get records from database
			$query = $pdo->query( 'SELECT * FROM usertable ORDER BY user_id' );

			if ( $query ) {
				$delimiter = ',';
				$filename = 'Ang' . date( 'Y-m-d' ) . '.csv';

				//create a file pointer
				$f = fopen( 'php://memory', 'w' );

				//set column headers
				$fields = array( 'Name','Nickname','Email','Occupation','Location','Age','Phone','F_name','M_name','F_occup','M_occup','F_loc','M_loc','F_phone','M_phone','Marital status','Sex' );
				fputcsv( $f, $fields, $delimiter );

				//output each row of the data, format line as csv and write to file pointer
				while( $row = $query->fetch( PDO::FETCH_ASSOC ) ) {
					$lineData = array( $row['name'], $row['nick'], $row['email'], $row['occupation'],$row['location'],$row['age'],$row['phone'],$row['f_name'],$row['m_name'],$row['f_occup'],$row['m_occup'],$row['f_loc'],$row['m_loc'],$row['f_phone'],$row['m_phone'],$row['m_status'],$row['sex'] );
					fputcsv( $f, $lineData, $delimiter );
				}

				//move back to beginning of file
				fseek( $f, 0 );

				//set headers to download file rather than displayed
				header( 'Content-Type: text/csv' );
				header( 'Content-Disposition: attachment; filename="' . $filename . '";' );

				//output all remaining data on a file pointer
				fpassthru( $f );
			}
			exit;
		}

		// User update
		public function update_user( $user_id, $loc, $phone, $email ){
			include 'config/server.php';

			$sql = "SELECT * FROM usertable WHERE user_id = ?";
			$stmt = $pdo->prepare($sql);	
			$stmt ->execute(array($user_id));

			//fetch row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row['user_id'] === $user_id) {

				$sql = "UPDATE usertable SET location=:location,phone=:phone, email=:email WHERE user_id=:user_id";

				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':user_id', $user_id);
				$stmt->bindValue(':location', $loc);
				$stmt->bindValue(':phone', $phone);
				$stmt->bindValue(':email', $email);
				$stmt->execute();

			}
		} // End of update users

		// Deleteing user function
		public function delete_user( $user_id ){
			include 'config/server.php';

			$sql = "SELECT * FROM usertable";
			$pds = $pdo->prepare($sql);
			$result = $pds->execute();

			$row=$pds->fetch(PDO::FETCH_ASSOC);

			if($row){
				$sql = "DELETE FROM usertable WHERE user_id=?";
				$pds = $pdo->prepare($sql);
				$result = $pds->execute([$user_id]);
			}
		} // End of deleting user

		// Table pagination
		private function myPagination(){
			include "config/server.php";
			
			$limit = $this->limit;
			$query = "SELECT COUNT(*) FROM usertable ";  
			$stmt = $pdo->query($query);
			$total_results = $stmt->fetchColumn();						
			$total_pages = ceil($total_results/$limit); 

			$pagLink = "<nav><ul class='pagination'>";  

			for ($page=1; $page<=$total_pages; $page++) {  
				$pagLink .= "<li class='page-item'><a class = 'page-link' href='users.php?page=".$page."'>" .$page. "</a></li>";  
			}; 
			
			echo $pagLink . "</ul></nav>";

		} // End of pagination


		// Change password
		public function __adminChangePassword( $currentPassword, $newPassword ){
				include "config/server.php";
				include 'config/server.php';

				$sql = "SELECT admin_id,admin_no,admin_pass FROM admin WHERE admin_pass = :admin_pass";

				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':admin_pass', $currentPassword);
				$stmt->execute();
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				
				if ($currentPassword != $row['admin_pass']){
					echo "<div class='row'>
						<div class='col-md-4'></div>
						<div class='alert alert-danger alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>×</span>	
						</button>
						<i class='fa fa-check mx-2'></i>
						<strong>Wrong!</strong> Check Username/PassWord </div>
						<div class='col-md-4'></div>
						</div>";
					
				}else{
					$query = "UPDATE admin SET admin_pass=:admin_pass";
					$stmt = $pdo->prepare($query);
					$stmt->bindValue(':admin_pass', $newPassword);
					$stmt->execute();

					echo "<div class='row'>
						<div class='col-md-4'></div>
						<div class='alert alert-success alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>×</span>
						</button>
						<i class='fa fa-check mx-2'></i>
						<strong>Password</strong> updated successfully </div>
						<div class='col-md-4'></div>
						</div>";
						echo "<script>window.location = 'index.php'</script>";
						
				}	
		} // End of change password

		
		// Edit success message
		public $editMsg = "
			<div class='row' style='margin-bottom: 25px'>
				<div class='col-md-4'></div>
					<div class='alert alert-success alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>×</span>
						</button>
						<i class='fa fa-check mx-2'></i>
						User edited successfully </div>
				<div class='col-md-4'></div>
			</div>
		";
		

		// Delete success message
		public $deleteMsg = "
			<div class='row' style='margin-bottom: 25px'>
			<div class='col-md-4'></div>
			<div class='alert alert-success alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>×</span>
			</button>
			<i class='fa fa-check mx-2'></i>
			User deleted successfully </div>
			<div class='col-md-4'></div>
			</div>
		";

	}

?>