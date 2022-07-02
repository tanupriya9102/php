<?php
$showAlert = false;
$exists=false;
	

if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'config.php';

  $empno=$_POST["empno"];
  $empname=$_POST["name"];
  $empemail=$_POST["email"];
  $empphone=$_POST["pno"];
  $empdept=$_POST["dept"];
  $empndesig=$_POST["desig"];
  


  $sql = "Select * from user_details where emp_no = '$empno'";
  $result=mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);

  if($num == 0 ){
    $sql="INSERT INTO `user_details` (`emp_no`,`name`,`email`,`department`,`designation`,`phone_no`) VALUES('$empno','$empname','$empemail','$empdept', '$empndesig','$empphone')";
    $result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
			}
  }
  if($num>0)
{
	$exists="Username not available";
}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  

</head>
<body>
<?php

if($showAlert) {
	
  echo "<script>alert('Signed Up Successfully!')</script>";
}

                                                                                
  
if($exists) {
  echo "<script>alert('Username already exists')</script>" ;

}
?>

<div class="container">

<form action="register.php" method="post">
<h1 style="text-align:center; text-decoration:underline;">REGISTER HERE</h1>
    <div class="container">
   <div class="form-group col-md-4">
    <label for="empno">Employee Number:</label>
    <input type="text" class="form-control" name="empno" id="empno" placeholder="">
  </div>
     
  
  <div class="form-group col-md-4">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder=" Your Name">
  </div>

  <div class="form-group col-md-4">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>

  <div class="form-group col-md-4">
    <label for="dept">Department:</label>
    <input type="text" class="form-control" name="dept" id="dept" placeholder="">
  </div>

  <div class="form-group col-md-4">
    <label for="desig">Designation:</label>
    <input type="text" class="form-control" name="desig" id="desig" placeholder="">
  </div>

  

  <div class="form-group col-md-4">
    <label for="pno">Phone Number:</label>
    <input type="text" class="form-control" name="pno" id="pno" placeholder="">
  </div>

  <!-- <div class="form-group col-md-4">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password">
  </div>

  <div class="form-group col-md-4">
    <label for="cpassword">Password</label>
    <input type="password" class="form-control" id="cpassword">
  </div> -->
  
  
 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</div>


    
</body>
</html>