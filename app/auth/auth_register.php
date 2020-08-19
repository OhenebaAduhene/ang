<?php
require_once 'app/Class.php';

if ( isset( $_POST['submit'] ) ) {

    if ( isset( $_POST['name'] ) && isset( $_POST['nick'] ) && isset( $_POST['email'] ) && isset( $_POST['occupation'] ) && isset( $_POST['location'] ) && isset( $_POST['age'] ) && isset( $_POST['phone'] ) && isset( $_POST['m_status'] ) && isset( $_POST['sex'] ) ) {

        $name = trim( $_POST['name'] );
        $nick = trim( $_POST['nick'] );
        $email = trim( $_POST['email'] );
        $occup = trim( $_POST['occupation'] );
        $loc = trim( $_POST['location'] );
        $age = trim( $_POST['age'] );
        $phone = trim( $_POST['phone'] );
        $f_name = trim( $_POST['f_name'] );
        $m_name = trim( $_POST['m_name'] );
        $f_occup = trim( $_POST['f_occup'] );
        $m_occup = trim( $_POST['m_occup'] );
        $f_loc = trim( $_POST['f_loc'] );
        $m_loc = trim( $_POST['m_loc'] );
        $f_phone = trim( $_POST['f_phone'] );
        $m_phone = trim( $_POST['m_phone'] );
        $status = trim( $_POST['m_status'] );
        $gender = trim( $_POST['sex'] );

        $user = new Users();
        $user->register( $name, $nick, $email, $occup, $loc, $age, $phone, $f_name, $m_name, $f_occup, $m_occup, $f_loc, $m_loc, $f_phone, $m_phone, $status, $gender );

    }

}