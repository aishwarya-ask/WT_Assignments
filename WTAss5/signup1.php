<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>sign up</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="signup.css">

<link rel="stylesheet" href="style.css">

<style>
body {
 /*background-image: url("1.jpg");*/
 background: radial-gradient(#fff, #ffd6d6);

}


</style>



</head>
<body>
<?php require('navbar.php'); ?> 
<div class="signup-form">
    <form  action=" " method="post" onsubmit="return validation()">
		<h2>Create an Account</h2>
		<p class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_name"  id="user_name" placeholder="Name" >
            <span id="usererror" class="text-danger" font-weight="bold"></span>
        </div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_mobile" id="user_mobile" placeholder="Mobile number" >
           <span id="mobileerror" class="text-danger" font-weight="bold"></span>
        </div>

		<div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_address" id="user_address" placeholder="Address" >
			<span id="addresserror" class="text-danger" font-weight="bold"></span>
        </div>

        <div class="form-group">
        	<input type="email" class="form-control input-lg" name="user_email" id="user_email" placeholder="Email" >
			  <span id="emailerror" class="text-danger" font-weight="bold"></span>
          
        </div>

		<div class="form-group">
            <input type="password" class="form-control input-lg" name="user_pswd" id="user_pswd" placeholder="Password" >
            <span id="passworderror"   class="text-danger"  font-weight="bold"></span>
        </div>
		 
        <div class="form-group">
           <button type="submit" class="btn btn-success btn-lg btn-block signup-btn"  name="insert_btn" >Sign Up</button>
          
          </div>
     <div class="text-center">Already have an account? <a href="#">Login here</a></div>
</form>

<?php
$conn = mysqli_connect('localhost','root','','restaurant');

if(mysqli_connect_errno())
{
    echo "connection fail";
}
else{
    echo "connection Ok";
}


if(isset($_POST['insert_btn']))
{
 $user_name = $_POST['user_name'];
 $user_mobile = $_POST['user_mobile'];
 $user_address = $_POST['user_address'];
 $user_email = $_POST['user_email'];
 $user_password = $_POST['user_pswd'];

$insert = "INSERT INTO user_login(user_name,user_mobile,user_address,user_email,user_password) 
            VALUES('$user_name','$user_mobile','$user_address','$user_email','$user_password')";

$run_insert = mysqli_query($conn,$insert);
/*
if($run_insert == true)
{
    echo "data has been inserted";
}
else
{
    echo "Failed,Try again";
}*/

}

?>

</div>

   </div>





   <script src="validation.js"></script>

</body>
</html>