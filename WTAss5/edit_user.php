<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

<div class="container">
  <h2>Edit user</h2>
<?php 
   $conn = mysqli_connect('localhost','root','','restaurant');
 
   if(isset($_GET['edit']))
   {
       $edit_id = $_GET['edit'];

   $select = "SELECT * FROM user_login WHERE user_id='$edit_id'";
   $run = mysqli_query($conn, $select);
   $row_user = mysqli_fetch_array($run);
   
  $user_name = $row_user['user_name'];
  $user_mobile = $row_user['user_mobile'];
  $user_address = $row_user['user_address'];
  $user_email = $row_user['user_email'];
  $user_password = $row_user['user_password'];

   }

 ?>



<div class="signup-form">
    <form  action=" " method="post" onsubmit="return validation()">
	
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_name"  id="user_name" placeholder="Name" value="<?php echo $user_name; ?>">
            <span id="usererror" class="text-danger" font-weight="bold"></span>
        </div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_mobile" id="user_mobile" placeholder="Mobile number" value="<?php echo $user_mobile; ?>">
           <span id="mobileerror" class="text-danger" font-weight="bold"></span>
        </div>

		<div class="form-group">
        	<input type="text" class="form-control input-lg" name="user_address" id="user_address" placeholder="Address" value="<?php echo $user_address; ?>">
			<span id="addresserror" class="text-danger" font-weight="bold"></span>
        </div>

        <div class="form-group">
        	<input type="email" class="form-control input-lg" name="user_email" id="user_email" placeholder="Email" value="<?php echo $user_email; ?>">
			  <span id="emailerror" class="text-danger" font-weight="bold"></span>
          
        </div>

		<div class="form-group">
            <input type="password" class="form-control input-lg" name="user_pswd" id="user_pswd" placeholder="Password" value="<?php echo $user_password; ?>" >
            <span id="passworderror"   class="text-danger"  font-weight="bold"></span>
        </div>
		 

    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
    <a class="btn btn-primary" href="view_user.php">View Customers </a>
  </form>


  <?php
   $conn = mysqli_connect('localhost','root','','restaurant');
   if(isset($_POST['update_btn']))
   {

       $euser_name = $_POST['user_name'];
       $euser_mobile = $_POST['user_mobile'];
       $euser_address = $_POST['user_address'];
       $euser_email = $_POST['user_email'];
       $euser_password = $_POST['user_pswd'];
      
      $update = "UPDATE user_login SET user_name='$euser_name', user_mobile='$euser_mobile' ,
            user_address='$euser_address', user_email='$euser_email', user_password='$euser_password'
            WHERE user_id='$edit_id' " ;
      
      $run_edit = mysqli_query($conn, $update);
/*
       if($run_edit == true)
       {
           echo "Record has been Updated";
       }
       else{
           echo "Failed,Try again";
       }
   */
    }
 ?>






</div>

<script src="validation.js"></script>


</body>
</html>
