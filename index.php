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
<h2 class="heading-section">Register Here</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-4">
<div class="login-wrap p-0">
<h3 class="mb-4 text-center">Have an account?</h3>

<form method="POST">

<div class="form-group">
<input type="text" name="uname" class="form-control" placeholder="Username" required>
</div>

<div class="form-group">
<input type="email" name="e_mail" class="form-control" placeholder="Email_id" required>
</div>

<div class="form-group">
<input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>

<div class="form-group">
<input type="text" name="security_question" class="form-control" placeholder="Security Question" required>
</div>

<div class="form-group">
<input type="text" name="security_answer" class="form-control" placeholder="Securtiy Answer" required>
</div>

<div class="form-group">
<input type="text" name="authentication_code" class="form-control" placeholder="Authentication Code" required>
</div>

<div class="form-group">
<button type="submit" name="registration" class="form-control btn btn-primary submit px-3">Register</button>
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

<?php
	if(isset($_POST['registration']))
	{
		$usrname = $_POST['uname'];
		$eml = $_POST['e_mail'];
		$psswrd = $_POST['password'];
		$sec_ques = $_POST['security_question'];
		$sec_ans = $_POST['security_answer'];
		$authen_code = $_POST['authentication_code'];

		$imageFolder = "avatar/";
		$avtarlocation = array("avatar1.png","avatar2.png","avatar3.png","avatar4.png","avatar5.png","avatar6.png","avatar7.png");

		$photo = $base_url.$imageFolder.$avtarlocation[array_rand($avtarlocation,1)];

	$sql = mysqli_query($var,"SELECT * FROM Admin_register WHERE Email_id='$eml'");

	$query = mysqli_query($var,"INSERT INTO Admin_register(Username,Email_id,Password,Security_Question,Security_Answer,Authentication_Code,Profile_Picture) VALUES ('$usrname','$eml','$psswrd','$sec_ques','$sec_ans','$authen_code','$photo')");

	if(mysqli_num_rows($sql)>0)
	{
		echo"<script>alert('Email Id Already Exists')</script>";
	}
	elseif($query)
	{
		echo"<script>alert('User EnteredSuccessful')</script>";

		echo"<script>window.location.href='view.php'</script>";
	}

	else
	{
		echo"<script>alert('Error')</script>";
	}

	}
?>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"863ad2c70b8b9fd3","version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
