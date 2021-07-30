<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $data['judul'] ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= BASEURL ?>/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter" >
		<div class="container-login100" >
			<div class="wrap-login100" >
				<form action="<?= BASEURL ?>/auth/register_process" method="post" class="login100-form validate-form pt-4" >
					<span class="login100-form-title pb-2" >
						Register to continue
					</span>
					
					
					<div class="pb-1 wrap-input100">
						<input class="input100" type="text" name="fullname" id="fullname" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Fullname</span>
					</div>

					<div class="pb-1 wrap-input100 validate-input">
						<input class="input100" type="text" name="email" id="email" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					<div class="pb-1 wrap-input100 validate-input">
						<input class="input100" type="password" name="password" id="password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

                    <div class="pb-1 wrap-input100 validate-input">
						<input class="input100" type="text" name="phone" id="phone" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Phone Number</span>
					</div>

                    <div class="pb-1 wrap-input100 validate-input">
						<input class="input100" type="text" name="address" id="address" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Address</span>
					</div>
                    
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="<?= BASEURL ?>/auth" class="txt1">
								Already have Account
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= BASEURL ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= BASEURL ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL ?>/js/main.js"></script>

</body>
</html>