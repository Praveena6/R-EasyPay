<?php 
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>EasyPay-Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="login.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	     
			  
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">User Id</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username" required>
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password" required>
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		    <select class="form-select mb-3"
		          name="role" id="role"
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="manager">Manager</option>
		  </select>
		  </div>
		  
		 
		  <button type="submit" 
		    name="submit"  class="btn btn-login">Login</button>
		  <a href="index.php"><button type="button" class="btn btn-login">Return to Home</button></a>
		  <br><br>
		  <p>Create a new Account  <a href="signup.php"> Register</a></p>
		   

       
		</form>
      </div>
</body>
</html>
<?php 
session_start();
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo"not conn";
}
if(!mysqli_select_db($con,'easypay'))
{
	echo"not sel";
}
if(isset($_POST['submit']))
{
	$email=$_POST['username'];
	$pass=$_POST['password'];
	$role=$_POST['role'];
    $sql1="SELECT * FROM  detail where email='$email' and password='$pass'";
	$result1=mysqli_query($con,$sql1);
	$total1=mysqli_num_rows($result1);
	if($total1==1)
	{
		 header('location:loginhome.php');
	}

	else
	{echo "Invalid login credentials";}
	$sql="SELECT * FROM  detail where email='$email' and password='$pass' and role='manager'";
	$result=mysqli_query($con,$sql);
	$total=mysqli_num_rows($result);
	if($total==1)
	{
		 header('location:loginman.php');
	}

	else
	{
	 echo "failed";
     }
     
}

?>