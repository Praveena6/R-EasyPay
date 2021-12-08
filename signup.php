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
    <title>EasyPay-SignUp</title>
</head>
<body>
 <div class="container SignUp">
 	<h1 class="text-center">Register
 	</h1>
 	<br>
 	<form>
  <div class="form-group">
    
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>

  </div>
    <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <label>DOB</label>
    <input type="date" name="" class="form-control">

  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" placeholder="Gender"> 
      <option>Male</option>
      <option>Female</option>
      <option>Others</option>
    </select>
  </div>
  <div class="form-group">
  	 <input type="text" class="form-control" placeholder="Phone number">
  </div>
  <div class="form-group">
  	 <input type="text" class="form-control" placeholder="Address">
  </div>
  <div class="form-group">
  	<label>PAN Card Number</label>
  	 <input type="text" class="form-control">
  	 <label>Aadhar Card Number</label>
  	 <input type="text" class="form-control">

  </div>

  <div class="form-group">
    <label for="inputPassword6">Password</label>
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
    <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>
  <div class="form-group">
    <label for="inputPassword6">Retype Password</label>
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">

  </div>


  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>

  </div>
  <button type="submit" class="btn-login">Submit</button>
  <a href="index.php"><button type="button" class="btn-login">Return to Home</button></a>
</form>
 </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>