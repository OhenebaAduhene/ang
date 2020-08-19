    <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="users.php" style="line-height: 25px;">
                <div class="d-table m-auto">
                 <img class="user-avatar rounded-circle mr-2" src="images/avatars/admin.jpg" alt="User Avatar">
                  <span class="d-none d-md-inline ml-1">IoTLab Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="" aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php echo $active3 ?>" href="users.php">
                  <i class="fa fa-address-book" aria-hidden="true"></i>
                  <span>Member Info</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active1 ?>" href="fada.php">
                  <i class="fa fa-male" aria-hidden="true"></i>
                  <span>Father Info</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active2 ?>" href="mada.php">
                  <i class="fa fa-female" aria-hidden="true"></i>
                  <span>Mother Info</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active4 ?>" href="download.php">
                  <i class="fa fa-download" aria-hidden="true"></i>
                  <span>Download Data</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active5 ?>" href="admin_change_pwd.php">
                  <i class="fa fa-unlock" aria-hidden="true"></i>
                  <span>Reset Password</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="logout.php">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>