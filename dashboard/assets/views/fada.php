<?php

require_once 'app/Class.php';

if ( isset( $_POST['btn_update'] ) ) {
    if ( isset( $_POST['update_id'] ) ) {
        require_once 'app/auth/auth_update_user.php';

    }

}

if ( isset( $_POST['delete'] ) ) {
    if ( isset( $_POST['delete_id'] ) ) {
        require_once 'app/auth/auth_delete_user.php';
    }
}


include 'app/auth/auth_fada_table.php';

?>

