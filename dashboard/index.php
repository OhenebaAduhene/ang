  <?php include 'assets/inc/head.php'; ?>

  <?php require_once 'app/auth/auth_admin_login.php'; ?>
       
  <!-- Modal -->
<body style="background-image:url('public/images/bd.jpg');">
   <div class="offset-md-4 col-md-4" style="margin-bottom: 400px; margin-top: 120px;">
      <h1 class="ml3 mb-5" >St Mark Ang-2012</h1>
      <!-- Danger Dismissible Alert -->
      <form class="form-group login-container" method="POST" action="">
         <div>
            <div class="form-group col-md-12">
               <div align="center">
                  <img src="images/avatars/admin.jpg" width="70" style="border-radius: 100%">  
               </div>
               <p align="center">Admin</p>
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;"><i class="fa fa-user"></i></span>
                  </div>
                  <input type="text" name="admin_no" class="form-control" placeholder="Admin Number" aria-label="Admin" aria-describedby="basic-addon1" style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;" required>
               </div>
               <br>
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon2" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;"><i class="fa fa-lock"></i></span>
                  </div>
                  <input type="password" name="admin_pass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" style="border-top-right-radius: 50px;border-bottom-right-radius: 50px;" required>
               </div>
               <br>
            </div>
         </div>
         <button type="submit" name="submit" class="btn  btn-primary btn-block ">Login</button><br>
   </div>
   </form>
   </div>
   <style>
      .ml3 {
      font-weight: 900;
      font-size: 3.5em;
      }
   </style>
   <script src="scripts/anime.min.js"></script>
   <script>
      var textWrapper = document.querySelector('.ml3');
      textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
      
      anime.timeline({loop: true})
      .add({
      targets: '.ml3 .letter',
      opacity: [0,1],
      easing: "easeInOutQuad",
      duration: 2250,
      delay: (el, i) => 150 * (i+1)
      }).add({
      targets: '.ml3',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
      });
   </script>
</body>
   

   <?php include 'assets/inc/footer.php'; ?>