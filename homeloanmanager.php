<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM HomeLoan");
$result1 = mysqli_query($conn,"SELECT * FROM HomeLoan");
$result2 = mysqli_query($conn,"SELECT * FROM HomeLoan");
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>EasyPay</title>

  </head>
   <style type="text/css">
  *{
    margin: 0;
    padding: 0;
  }
.custom-shape-divider-bottom-1637758452 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1637758452 svg {
    position: relative;
    display: block;
    width: calc(300% + 1.3px);
    height: 84px;
}

.custom-shape-divider-bottom-1637758452 .shape-fill {
    fill: #FFFFFF;
}

</style>
  <body>
    <nav class="nav-bar navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
                        <li class="nav-item  active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account.php">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="homeloanmanager.php">Loan Approval</a>
            </li>
          </ul>        
          </div>      
          <a href="loginman.php" class="text-center"><button class="btn btn-login2">Return to home</button></a>  
    </nav>
    <div style="position: relative;min-height:50vh; background-image:  linear-gradient(
    120deg,
    hsl(192, 70%, 51%),
    hsl(136, 65%, 51%)
  );">
    <h1 class="text-center" id="title">Check and Approve HomeLoan</h1>
    <p class="text-center" id="title">Take your financial life online. Your easy bank account<br />
          will be a one-stop-shop for spending,saving,<br />budgeting,investing,
          and much more.
    </p>

    <div class="custom-shape-divider-bottom-1637758452">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
  </div>
</div>

    <h3 class="text-center">Personal Details</h3>
 <div class="center" >
    <center>
      <table class="text-center">
      <tr> 
      <th>Name</th>
      <th>DOB</th>
      <th>Gender</th>
      <th>Nationality</th>
      <th>Place of Birth</th>
      <th>Religion</th>
      <th>Community</th>
      <th>Driving Licence Number</th>
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr class="<?php if(isset($classname)) echo $classname;?>">
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["dob"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
       <td><?php echo $row["nationality"]; ?></td>
      <td><?php echo $row["pob"]; ?></td>
      <td><?php echo $row["religion"]; ?></td>
       <td><?php echo $row["community"]; ?></td>
      <td><?php echo $row["licenceno"]; ?></td>
      </div>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table></center>
</div>
<br>
<h3 class="text-center">Permanent Address</h3>
 <div class="center" >
    <center>
      <table class="text-center">
      <tr> 
       <th>House/Flat/Apartment No or Name</th>
      <th>Street Name or Number</th>
      <th>Landmark</th>
      <th>City</th>
     <th>Pincode</th>
      <th>State</th>
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result1)) {
      ?>
      <tr class="<?php if(isset($classname)) echo $classname;?>">
      <td><?php echo $row["houseno"]; ?></td>
       <td><?php echo $row["street"]; ?></td>
      <td><?php echo $row["landmark"]; ?></td>
      <td><?php echo $row["city"]; ?></td>
       <td><?php echo $row["pincode"]; ?></td>
      <td><?php echo $row["state"]; ?></td>
      </div>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table></center>
</div>
<br>
<h3 class="text-center">Employment and Income Details</h3>

 <div class="center" >
    <center>
      <table class="text-center">
      <tr>
      <th>Nature of Occupation</th>
      <th>Employee Name</th>
      <th>Years of Experience</th>
      <th>Contact Number</th>
      <th>Department</th>
      <th>Designation</th>
      <th>Business Name</th>
      <th>Organisation Type</th>
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result2)) {
      ?>
      <tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo $row["occupation"]; ?></td>
      <td><?php echo $row["employeename"]; ?></td>
      <td><?php echo $row["yoe"]; ?></td>
       <td><?php echo $row["phoneno"]; ?></td>
      <td><?php echo $row["department"]; ?></td>
      <td><?php echo $row["desigation"]; ?></td>
      <td><?php echo $row["businessname"]; ?></td>
      <td><?php echo $row["organisationtype"]; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table></center>
</div>

<br>
 <div class="text-center">
     <button type="submit" class="btn btn-login" name="submit">Approve</button>
</div>
<br>
   <footer class="footer">
      <div class="footer-container">
        <div class="social-container">
          <img src="./images/icon-facebook.svg" alt="" />
          <img src="./images/icon-instagram.svg" alt="" />
          <img src="./images/icon-twitter.svg" alt="" />
          <img src="./images/icon-pinterest.svg" alt="" />
        </div>
        <div class="menu">
          <a href="#">About us</a>
          <a href="#">Contact us</a>
          <a href="#">Blog</a>
        </div>
        <div class="menu">
          <a href="#">Carriers</a>
          <a href="#">Support</a>
          <a href="#">Privacy Policy</a>
        </div>
        <button>Request Invite</button>
      </div>
    </footer>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>
<?php

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
$name=$_POST["name"];
$action='Approved';
$sql1 = "UPDATE homeloan SET action='$action' WHERE name='$name'";
{
if (mysqli_query($conn, $sql1)) {
  
  echo "Record updated successfully";
   
}

else
{
  echo "<h3><center><font color=red>Invalid </font></center></h3>"; 
}
}

}
?>