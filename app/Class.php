<?php
 session_start();
class Users{
   
    public function register($name,$nick,$email,$occup,$loc,$age,$phone,$f_name,$m_name,$f_occup,$m_occup,$f_loc,$m_loc,$f_phone,$m_phone,$m_status,$sex){

        include 'config/server.php';

        // checking if email already exist
        $sql = "SELECT COUNT(email) AS num FROM usertable WHERE email = ?";

        $stmt = $pdo->prepare($sql);
        $stmt ->execute(array($email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['num'] > 0)
        {
            // email already exist

            echo "<div class='row'>
					<div class='col-md-4'></div>
					<div class='alert alert-danger alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c' id='flash-msg'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>×</span>
					</button>
					<i class='fa fa-check mx-2'></i>
					<strong>Check!</strong> Email already exist </div>
					<div class='col-md-4'></div>
                    </div>";
                    

           
        }
        else {
            // insert into database
            $date = date('m/d/Y h:i:s a', time());

            $sql = "INSERT INTO usertable(name,nick,email,occupation,location,age,phone,f_name,m_name,f_occup,m_occup,f_loc,m_loc,f_phone,m_phone,m_status,sex,_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute([$name,$nick,$email,$occup,$loc,$age,$phone,$f_name,$m_name,$f_occup,$m_occup,$f_loc,$m_loc,$f_phone,$m_phone,$m_status,$sex,$date]);

           if ($result){

                if ($nick != ""){
                    echo "<div class='row'>
					<div class='col-md-4'></div>
					<div class='alert alert-success alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c' id='flash-msgs'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>×</span>
					</button>
					<i class='fa fa-check mx-2'></i>
					<strong>$nick!</strong> registered successfully </div>
					<div class='col-md-4'></div>
                    </div>";
                }else{
                    echo "<div class='row'>
					<div class='col-md-4'></div>
					<div class='alert alert-success alert-dismissible fade show mb-0 col-md-4' role='alert' style='margin-top:5%, align:c' id='flash-msgs'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>×</span>
					</button>
					<i class='fa fa-check mx-2'></i>
					<strong>You!</strong> registered successfully </div>
					<div class='col-md-4'></div>
                </div>";
                }
                

           }

        }

    }
}