 
<?php 

  //start session
session_start();

if(!isset($_SESSION['admin_id']) || !isset($_SESSION['logged_in'])){
  header('Location:index.php');
  exit;
}

include "assets/inc/head.php";
$active2 = "active";
?>


<body class="h-100">

  <?php include "assets/inc/color_switcher.php" ?>

  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <?php include "assets/inc/aside.php" ?>

      <!-- End Main Sidebar -->
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

       <!-- main-navbar -->
       <?php include "assets/inc/navbar.php" ?>
       <!-- / .main-navbar -->

       <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">TOTAL USERS</span>
            <h3 class="page-title">Overview</h3>
          </div>
        </div>
        <!-- End Page Header -->
        <?php 
          require_once "app/Class.php";

          if (isset($_POST['update_id'])){
            if (isset($_POST['btn_update'])){
            $user = new Users();
            echo $user->editMsg;
          }
          }

          if (isset($_POST['allow_id'])){
            if (isset($_POST['allow'])){
              $user = new Users();
              echo $user->allowMsg;
            }
          }

          
          if (isset($_POST['block_id'])){
            $user = new Users();
            echo $user->blockMsg;
          }

          if (isset($_POST['delete_id'])){
            $user = new Users();
            echo $user->deleteMsg;
          }
        ?>

        <!-- Small Stats Blocks -->
        <?php include "assets/inc/stat.php" ?>
        <!-- End Small Stats Blocks -->
        <?php include "assets/views/mada.php" ?>
        <!-- End Discussions Component -->
        
        

      </div>
    </div>
  </main>
</div>
</div>
<?php include "assets/inc/footer.php" ?>