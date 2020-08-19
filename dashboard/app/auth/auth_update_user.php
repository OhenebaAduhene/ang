<?php

require_once 'app/Class.php';

if ( isset( $_POST['btn_update'] ) ) {
    if ( isset( $_POST['location'] ) && isset( $_POST['phone'] ) && isset( $_POST['email'] ) ) {
        if ( isset( $_POST['update_id'] ) ) {

            $user_id = $_POST['update_id'];

            $loc = trim( $_POST['location'] );
            $phone = trim( $_POST['phone'] );
            $email = trim( $_POST['email'] );

            if ( $user_id ) {
                $user = new Users();
                $user->update_user( $user_id, $loc, $phone, $email );
            }

        }
    }
}
?>