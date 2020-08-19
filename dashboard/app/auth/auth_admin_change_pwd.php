<?php
require_once '.../../app/Class.php';

if ( isset( $_POST['submit'] ) ) {
    # code...

    if ( isset( $_POST['currentPassword'] ) && isset( $_POST['newPassword'] ) && isset( $_POST['confirmPassword'] ) ) {

        $currentPassword = trim( $_POST['currentPassword'] );
        $newPassword = trim( $_POST['newPassword'] );
        $confirmPassword = trim( $_POST['confirmPassword'] );

        $uppercase = preg_match( '@[A-Z]@', $newPassword );
        $lowercase = preg_match( '@[a-z]@', $newPassword );
        $number    = preg_match( '@[0-9]@', $newPassword );

        if ( $newPassword === $confirmPassword ) {

            if ( !$uppercase || !$lowercase || !$number || strlen( $newPassword ) < 8 ) {
                echo "<div class='row'>
				<div class='col-md-4'></div>
				<div class='alert alert-danger alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>×</span>
				</button>
				<i class='fa fa-check mx-2'></i>
				<strong>Password! </strong> should contain at least a number, lowercase, uppercase letters and should be greater than 7 letters</div>
				<div class='col-md-4'></div>
				</div>";

            } else {
                $newPassword = md5( $newPassword );
                $currentPassword = md5( $currentPassword );

                $user = new Users();
                $user->__adminChangePassword( $currentPassword, $newPassword );

            }

        } else {
            echo "<div class='row'>
				<div class='col-md-4'></div>
				<div class='alert alert-danger alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>×</span>
				</button>
				<i class='fa fa-check mx-2'></i>
				<strong>Check! </strong>Current Password/ New Password mismatch</div>
				<div class='col-md-4'></div>
				</div>";
        }

    }

}

?>