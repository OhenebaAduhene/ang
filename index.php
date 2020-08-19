<?php
	require_once 'config/server.php';
	require_once 'app/auth/auth_register.php';	 
	require_once 'app/Class.php';
 ?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>St Mark Ang - 2012</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Room Booking Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- js -->
 <script src="js/jquery.min.js"></script>
<!-- //js --> 
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src='../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<div class="main">
<!---728x90--->

		<h1>2012-St Mark's Ang</h1>
<!---728x90--->

		<div class="w3_agile_main_grids">
		
			<div id='progress'><div id='progress-complete'></div></div>
			
			<form id="SignupForm" action="" class="agile_form" method="post">
				<fieldset>
					<h3>Membership Registration</h3>
					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input id="Name" type="text" name="name" class="form-control" placeholder="Name" required="" />
						</div>
					</div>
					
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-user-secret" aria-hidden="true"></i>
							<input id="nick" type="text" name="nick" class="form-control" placeholder="Nickname"  />
						</div>
					</div>

					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input id="Email" type="email" name="email" class="form-control" placeholder="Email" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form ">
						<div class="wthree_input">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<input id="occupation" type="text" name="occupation" class="form-control" placeholder="occupation" required="" />
						</div>
					</div>

					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<input id="location" type="text" name="location" class="form-control" placeholder="Location" required="" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-line-chart" aria-hidden="true"></i>
							<input id="age" type="text" name="age" class="form-control" placeholder="Your Age" required="" />
						</div>
					</div>

					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input id="phone" type="text" name="phone" class="form-control" placeholder="Contact Number" required="" />
						</div>
					</div>
					
					
					<div class="clear"> </div>
				</fieldset>

				<fieldset>
					<h3>Guardian Information</h3>
					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input id="Name" type="text" name="f_name" class="form-control" placeholder=" Father's Name"  />
						</div>
					</div>
				
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input id="nick" type="text" name="m_name" class="form-control" placeholder="Mother's Name"  />
						</div>
					</div>
				
					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<input id="f_occup" type="text" name="f_occup" class="form-control" placeholder="Father's Occupation"  />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form ">
						<div class="wthree_input">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<input id="m_occup" type="text" name="m_occup" class="form-control" placeholder="Mother's Occupation" />
						</div>
					</div>
				
					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<input id="f_loc" type="text" name="f_loc" class="form-control" placeholder="Father's Location" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<input id="m_loc" type="text" name="m_loc" class="form-control" placeholder="Mother's Location"  />
						</div>
					</div>
				
					<div class="form-group agileits_w3layouts_form" style="margin-right: 20px;">
						<div class="wthree_input">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input id="f_phone" type="text" name="f_phone" class="form-control" placeholder="Father's Number" />
						</div>
					</div>
					<div class="form-group agileits_w3layouts_form">
						<div class="wthree_input">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input id="m_phone" type="text" name="m_phone" class="form-control" placeholder="Mother's Number" />
						</div>
					</div>
				
				
					<div class="clear"> </div>
				</fieldset>
				
				<fieldset>
					<h3>Marital Status</h3>
					<h4 class="w3layouts_type">What is your marital status ?</h4>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-user" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="status" checked="" value="single" >
								<i></i>Single
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-users" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="status" value="married" >
								<i></i>Married
							</label>
						</div>
					</div>
					<input type="hidden" name="m_status" value="" id="m_stat" required>
					<div class="clear"> </div>
				</fieldset>

				<fieldset>
					<h3>Gender</h3>
					<h4 class="w3layouts_type">What is your gender ?</h4>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-male" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="gender" checked="" value="male" >
								<i></i>Male
							</label>
						</div>
					</div>
					<div class="form-group agileits_circles">
						<div class="wthree_radio">
							<span class="fa fa-female" aria-hidden="true"></span>
							<label class="radio">
								<input type="radio" name="gender" value="female">
								<i></i>Female
							</label>
						</div>
					</div>
					<input type="hidden" name="sex" value="" id="gen" required>
					<div class="clear"> </div>
				</fieldset>
				
				
	
				<p>
					<button type="submit" id="SaveAccount" name="submit" class="btn btn-primary agileinfo_primary submit">Submit form</button>
				</p>
			</form>
			
<!---728x90--->
			
			<div class="agileits_copyright">
				<p> <a target="_blank" href="https://github.com/OhenebaAduhene">OhenebaAduhene</a></p>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.validate.min.js"></script>
	<!-- <script src="js/jquery.min.js"></script> -->
	<script src="js/jquery.formtowizard.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	

    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );

            $signupForm.validate({errorElement: 'em'});

            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });

		document.getElementById("SaveAccount").addEventListener("click", function () {


			var stat = document.getElementsByName("status");

			var status = (stat[0].checked == true) ? stat[0] : stat[1];
			document.getElementById("m_stat").value = status.value;


			var gen = document.getElementsByName("gender");

			var gender = (gen[0].checked == true) ? gen[0] : gen[1];
			document.getElementById("gen").value = gender.value;

			

   		 })
		
    </script>
</body>

</html>