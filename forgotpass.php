<?php
    include"./connection.php";

    if(isset($_POST['submit']) )
    {
      $email = mysqli_real_escape_string($con,$_POST['email']);

      $emailquery = "select *from users where email=$'email' ";
      $query =mysqli_query($con,$emailquery);

     

      if($query)
      {
        $userdata = mysqli_fetch_array($query);

        $user_name = $userdata['user_name'];
        $token = $userdata['token'];

        $subject = "Password Reset";
        $body = "Hi, $username. click here too reset your password
        http://localhost/pharmacy/resetpass.php?token=$token";
        $sender_email = "From: vinisharma0120@gmail.com";

        if(mail($email, $subject, $body,  $sender_email))
        {
          $_SESSION['msg'] = "check you mail to reset your password $email";
          header('location: login.php');
        }
        else
        {
          echo"Email sending Failed... ";
        }
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
   <title>Password Recovery</title>
</head>
<style>
.form-gap {
    padding-top: 70px;
}
</style>
<body>

 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                  
                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Send Link" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
</body>
</html> 



