<?php 
    require_once 'config/server.php';
    require_once 'app/auth/auth_admin_change_pwd.php';
    include_once 'app/Class.php';
?>

<div class="offset-md-4 col-md-4" style="margin-bottom: 400px; margin-top: 120px;">
   <!-- Danger Dismissible Alert -->
 <form class="form-group login-container" method="POST" action="">
 <div>
   <div class="form-group col-md-12">
     <p align="center">Admin</p>
   <div class="input-group">
       <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;"><i class="fa fa-lock"></i></span>
       </div>
       <input type="password" name="currentPassword" class="form-control" placeholder="Current Password" aria-label="Admin" aria-describedby="basic-addon1" style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;" required>
   </div><br>
   <div class="input-group">
       <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon2" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;"><i class="fa fa-lock"></i></span>
       </div>
       <input type="password" name="newPassword" class="form-control" placeholder="New Password" aria-label="Password" aria-describedby="basic-addon2" style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;" required>
   </div><br>

   <div class="input-group">
       <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon2" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;"><i class="fa fa-lock"></i></span>
       </div>
       <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon2" style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;" required>
   </div><br>
</div>
 </div>
  <button type="submit" name="submit" class="btn  btn-primary btn-block ">Submit</button>
</div>

</form>
</div>