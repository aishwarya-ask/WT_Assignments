<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h2>Customers</h2>
  <?php
   $conn = mysqli_connect('localhost','root','','restaurant');
   if(isset($_GET['del']))
   {
       $del_id = $_GET['del'];
       $delete = "DELETE FROM user_login WHERE user_id='$del_id'";
       $run_delete = mysqli_query($conn,$delete);
       if($run_delete == true)
       {
           echo "Record has been Deleted";
       }
       else{
           echo "Failed,Try again";
       }
    }
    
 ?>
  

  <table class="table table-striped">
    <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
        <th>Mobile No.</th>
        <th>Address</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
      </thead>
    <tbody>
      <?php 
   $conn = mysqli_connect('localhost','root','','restaurant');
   $select = "SELECT * FROM user_login";
   $run = mysqli_query($conn, $select);
   while($row_user = mysqli_fetch_array($run))
   {
   
 $user_id = $row_user['user_id'];
 $user_name = $row_user['user_name'];
 $user_mobile = $row_user['user_mobile'];
 $user_address = $row_user['user_address'];
 $user_email = $row_user['user_email'];
 $user_password = $row_user['user_password'];

    
  ?>
  
        <tr>
        <td><?php echo $user_id; ?> </td>
        <td><?php echo $user_name; ?> </td>
        <td><?php echo $user_mobile; ?> </td>
        <td><?php echo $user_address; ?> </td>
        <td><?php echo $user_email; ?> </td>
        <td><?php echo $user_password; ?> </td>
        <td><a  class="btn btn-danger" href="view_user.php?del=<?php echo $user_id; ?>">Delete</a></td>    
        <td><a  class="btn btn-success" href="edit_user.php?edit=<?php echo $user_id; ?>">Edit</a></td>    
        
    
    </tr>
   <?php } ?>
    </tbody>
 
  </table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>
