<?php 
require_once "config/server.php";
$query = "SELECT COUNT(*) FROM usertable";  
$stmt = $pdo->query($query);
$mem = $stmt->fetchColumn(); 

$query = "SELECT COUNT(*) FROM usertable WHERE sex='male'";  
$stmt = $pdo->query($query);
$male = $stmt->fetchColumn();

$query = "SELECT COUNT(*) FROM usertable WHERE sex='female'";  
$stmt = $pdo->query($query);
$female = $stmt->fetchColumn();

$query = "SELECT COUNT(*) FROM admin ";  
$stmt = $pdo->query($query);
$admin = $stmt->fetchColumn(); 

 $total = $admin+ $male + $female;


?>

<div class="row">
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase">Total Users</span>
            <h6 class="stats-small__value count my-3"><?php echo $total ?></h6>
          </div>
        </div>
        <canvas height="100" class="blog-overview-stats-small-1"></canvas>
      </div>
    </div>
  </div>
 
  <div class="col-lg col-md-4 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase">Males</span>
            <h6 class="stats-small__value count my-3"><?php echo $male ?></h6>
          </div>
        </div>
        <canvas height="120" class="blog-overview-stats-small-3"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg col-md-4 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase"> Female</span>
            <h6 class="stats-small__value count my-3"><?php echo $female ?></h6>
          </div>
        </div>
        <canvas height="120" class="blog-overview-stats-small-3"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg col-md-4 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase">Admin</span>
            <h6 class="stats-small__value count my-3"><?php echo $admin ?></h6>
          </div>
        </div>
        <canvas height="120" class="blog-overview-stats-small-4"></canvas>
      </div>
    </div>
  </div>
 