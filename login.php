<?php 

session_start();
require 'connection.php';


	include("functions.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="./images/pharma_img.jfif" class="brand_logo" alt="Programming Knowledge logo">
				</div>
			</div>	
			<div class="d-flex justify-content-center form_container">
				<form  method="post" >

				<?php
					if($_SERVER['REQUEST_METHOD'] == "POST")
					{
						$user_name = $_POST['user_name'];
						$password = $_POST['password'];
				
						if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
						{
				
							//read from database
							$query = "select * from users where user_name = '$user_name' limit 1";
							$result = mysqli_query($con, $query);
				
							if($result)
							{
								if($result && mysqli_num_rows($result) > 0)
								{
				
									$user_data = mysqli_fetch_assoc($result);
									
									if($user_data['password'] === $password)
									{
				
										$_SESSION['user_id'] = $user_data['user_id'];
										header("Location: index.php");
										die;
									}
									
								}
							}
						
							echo "wrong username or password!";
						}else
						{
							echo "wrong username or password!";
						}
					}
				?>
				
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-envelope"></i></i></span>					
						</div>
						<input id="text" type="text" name="user_name" placeholder="Email" required><br><br>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input id="text" type="password" name="password" placeholder="Password" required><br><br>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
				
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<input id="button" type="submit" class="btn login_btn" value="Login">
					
				</div>

				


			</form>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="./signup.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="./forgotpass.php">Forgot your password?</a>
					</div>
				</div>
		</div>
	</div>
</div>

</body>
</html>