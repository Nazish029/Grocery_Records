<?php
include('config_db.php');
?>
<!doctype html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url(images/cover_img.jpg);">

<section class="ftco-section">

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5"> 
<h2 class="heading-section">Login Portal</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center">Have an account?</h3>

<form method="POST">


<div class="form-group">
<input type="email" name="e_mail" class="form-control" placeholder="Email_id" required autocomplete="off">
</div>

<div class="form-group">
<input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>

<div class="form-group">
<button type="submit" name="login_user" class="form-control btn btn-primary submit px-3">Login Here</button>
</div>

<div class="form-group d-md-flex">
<div class="w-50">
<label class="checkbox-wrap checkbox-primary">Remember Me
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</div>
<div class="w-50 text-md-right">
<a href="#" style="color: #fff">Forgot Password ?</a>
</div>
</div>

<div class="w-20">
Already Have An Account? <a href="http://localhost/Grocery_records/login.php" style="color: #fff">Login Here</a>
</div>

</form>

</div>
</div>
</div>
</div>

</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"863ad2c70b8b9fd3","version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>



<?php

	if(isset($_POST['login_user']))
	{
		$ureml= $_POST['e_mail'];
		$urpasswrd= $_POST['password'];

		session_start();
		$_SESSION['loggedinUser'] = $ureml;
	
		$query=mysqli_query($var,"SELECT * FROM Admin_register WHERE Email_id='$ureml' and Password='$urpasswrd'");

		if(mysqli_num_rows($query)>0)

		{
			echo"<script>alert('Login Successful')</script>";
			echo"<script>window.location.href='dashboard.php'</script>";

		}

		else 
		{
			echo"<script>alert('Invalid Details')</script>";
		}
	}
?>
