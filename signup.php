<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $cpassword =$_POST['cpassword'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,name,user_name,password,cpassword,phone,gender) values ('$user_id','$name','$user_name','$password','$cpassword','$phone','$gender')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
</head>
<body>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="./images/img.jfif" class="brand_logo" alt="">
				</div>
			</div>	
		 <div class="d-flex justify-content-center form_container">
			<form method="post">
				

				<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input id="text" type="text" placeholder="enter your name" name="name" required><br><br>
				</div>

				<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>					
						</div>
						<input id="text" type="text" placeholder="enter your email" name="user_name" required><br><br>
				</div>
				
				<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input id="text" type="password" placeholder="enter your password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
				</div>

				<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input id="text" type="password" placeholder="enter your confirm pass" name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
				</div>

				<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>					
						</div>
						<input id="text" type="text" placeholder="enter your phone number" name="phone" required><br><br>
				</div>
				
				
						<div class="col-md-12">
							<label for="c_message" class="text-black">Gender <span class="text-danger">*</span></label><br>
							<tr>
							<td>
									<input type="radio" name="gender" value="Male">Male 
									<input type="radio" name="gender" value="Female" > Female
									<input type="radio" name="gender" value="Other" > other<br><br>
							</td>
							</tr>
						</div>
				
			</div>
						
	
					<div class="d-flex justify-content-center mt-1 login_container">
						<input id="button" type="submit" class="btn login_btn" value="Signup">
						
					</div>
				
			</form>
				
				<div class="mt-0">
						<div class="d-flex justify-content-center links">
							Already have a  account? <a href="./login.php" class="ml-2">Login</a>
						</div>
				</div>
		</div>
	</div>
</div>


<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>