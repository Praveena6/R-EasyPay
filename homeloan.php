<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM transfer");
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
  <body class="perLoan">
    <div>
      <h1  class="text-center display-4 personalLoan">Home Loan</h1>
    </div>
    <form method="post" action="homeloan.php" >
    <div class="container">
    <h5>Personal Details</h5>
    <form>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
          
          <label for="exampleFormControlSelect1">DOB</label>
          <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your date of birth">

          <label for="exampleFormControlSelect1">Gender</label>
          <select class="form-control" name="gender" id="exampleFormControlSelect1" placeholder="Gender"> 
            <option>Male</option>
            <option>Female</option>
            <option>Others</option>
          </select>
          </div>

          <label for="exampleFormControlSelect1">Nationality</label>
          <input type="text" class="form-control" name="nationality" id="exampleInputEmail1" aria-describedby="emailHelp" >

          <label for="exampleFormControlSelect1">Place of Birth</label>
          <input type="text" class="form-control"  name="pob"  id="exampleInputEmail1" aria-describedby="emailHelp" >

          <label for="exampleFormControlSelect1">Religion</label>
          <input type="text" class="form-control" name="religion" id="exampleInputEmail1" aria-describedby="emailHelp" >

        
          <label for="exampleFormControlSelect1">Community</label><br>
        
        <div class="form-group form-check">

          <input type="checkbox" class="form-check-input" name="community" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">SC</label>
          <br>
          <input type="checkbox" class="form-check-input" name="community"id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">ST</label>
          <br>
          <input type="checkbox" class="form-check-input"name="community" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">OBC</label>
          <br>
          <input type="checkbox" class="form-check-input" name="community"id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">General</label>

        </div>

         <div class="form-group">
            <label for="DriveLic">Driving Licence Number</label>
           <input type="text" id="#DriveLic" name="licenceno" class="form-control">
        </div>

        

  <p><b>Present Address</b></p>
      <div class="form-group">
        <div class="row">
            <div class="col">
              <label for="PresentAdd">House/Flat/Apartment No or Name</label>
              <input type="text" name="houseno" class="form-control">
            </div>
            <div class="col">
              <label for="PresentAdd">Street Name or Number</label>
              <input type="text"  name="street" class="form-control" >
            </div>
        </div>
         <div class="row">
            <div class="col">
              <label for="PresentAdd">Landmark</label>
              <input type="text" name="landmark"  class="form-control">
            </div>
            <div class="col">
              <label for="PresentAdd">City</label>
              <input type="text" name="city"  class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col">
              <label for="PresentAdd">Pincode</label>
              <input type="text"  name="pincode" class="form-control">
            </div>
            <div class="col">
              <label for="PresentAdd">State</label>
              <input type="text"  name="state" class="form-control" >
            </div>
        </div>
      </div>

 <p><b>Permanent Address</b></p>
 <div class="form-group form-check">
  <p>(Is permanent address same as present address?)</p>
    <input type="checkbox" class="form-check-input" name="permanentaddress"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Yes</label>
<br>
     <input type="checkbox" class="form-check-input" name="permanentaddress"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No</label>
  </div>
      <div class="form-group">
        <div class="row">
            <div class="col">
              <label for="PresentAdd">House/Flat/Apartment No or Name</label>
              <input type="text"  name="phouse" class="form-control">
            </div>
            <div class="col">
              <label for="PresentAdd">Street Name or Number</label>
              <input type="text"  name="pstreet" class="form-control" >
            </div>
        </div>
         <div class="row">
            <div class="col">
              <label for="PresentAdd">Landmark</label>
              <input type="text" name="plandmark"  class="form-control">
            </div>
            <div class="col">
              <label for="PresentAdd">City</label>
              <input type="text" name="pcity"  class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col">
              <label for="PresentAdd">Pincode</label>
              <input type="text" name="ppincode"  class="form-control">
            </div>
            <div class="col">
              <label for="PresentAdd">State</label>
              <input type="text"  name="pstate" class="form-control" >
            </div>
        </div>
      </div>
      <h5>Employment and Income Details</h5>
              <label>Nature of Occupation</label>
              <div class="form-group form-check">         
                  <input type="checkbox" class="form-check-input"  name="occupation" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Salaried</label>
                  <br>
                  <input type="checkbox" class="form-check-input" name="occupation"  id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Businessman/Self Employed professional </label>
                  <br>
                  <input type="checkbox" class="form-check-input"  name="occupation" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Pensioner</label>

              </div>

              <div class="form-group">
                  <label>Employee Name</label>
                  <input type="text" class="form-control" name="employeename">
                  <div class="row">
                    <div class="col">
                      <label>Years of Experience</label>
                      <input type="text" class="form-control" name="yoe">
                    </div>
                    <div class="col">
                      <label>Contact Number</label>
                      <input type="text" class="form-control" name="phoneno">
                    </div>
                  </div>  

                  <div class="row">
                    <div class="col">
                      <label>Department</label>
                      <input type="text" class="form-control" name="department">
                    </div>
                    <div class="col">
                      <label>Designation</label>
                      <input type="text" class="form-control" name="desigation">
                    </div>
                  </div>

                  <label>Business Name</label>
                   <input type="text" class="form-control" name="businessname">

                  <label>Organisation Type</label>
                  <div class="form-group">
                  <div class="row">
                    <div class="col col1">
                      <input type="checkbox" class="form-check-input" name="organisationtype" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Public Sector Unit</label>
                    </div>
                    <div class="col">
                      <input type="checkbox" class="form-check-input" name="organisationtype" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Listed Private Company</label>
                    </div>
                    <div class="col">
                      <input type="checkbox" class="form-check-input" name="organisationtype" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Unlisted Private Company</label>
                    </div>
                    <div class="col">
                      <input type="checkbox" class="form-check-input" name="organisationtype" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">MNC</label>
                    </div>
                    <div class="col">
                      <input type="checkbox" class="form-check-input"  name="organisationtype" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Central/State Government</label>
                    </div>
                    <div class="col">
                      <input type="checkbox" class="form-check-input"  name="organisationtype" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Local Civic Body</label>
                    </div>
                  </div>
              </div>  
      <button type="submit" class="btn-login" name="submit" >Submit</button>
      <a href="loginhome.php"><button type="button" class="btn-login">Return to Home</button></a>
  </form>
  </div>
</div>
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
  
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$pob=$_POST['pob'];
$religion=$_POST['religion'];
$community=$_POST['community'];
$licenceno=$_POST['licenceno'];
$houseno=$_POST['houseno'];
$street=$_POST['street'];
$landmark=$_POST['landmark'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$permanentaddress=$_POST['permanentaddress'];
$phouse=$_POST['phouse'];
$pstreet=$_POST['pstreet'];
$plandmark=$_POST['plandmark'];
$pcity=$_POST['pcity'];
$ppincode=$_POST['ppincode'];
$pstate=$_POST['pstate'];
$occupation=$_POST['occupation'];
$employeename=$_POST['employeename'];
$yoe=$_POST['yoe'];
$phoneno=$_POST['phoneno'];
$department=$_POST['department'];
$desigation=$_POST['desigation'];
$businessname=$_POST['businessname'];
$organisationtype=$_POST['organisationtype'];
  $sql=" INSERT INTO homeloan (name, dob, gender, nationality, pob, religion, community, licenceno, houseno, street, landmark, city, pincode, state, permanentaddress, phouse, pstreet, plandmark, pcity, ppincode, pstate, occupation, employeename, yoe, phoneno, department, desigation,businessname, organisationtype) VALUES ('$name', '$dob', '$gender', '$nationality', '$pob', '$religion', '$community', '$licenceno', '$houseno', '$street', '$landmark', '$city', '$pincode', '$state', '$permanentaddress', '$phouse', '$pstreet', '$plandmark', '$pcity', '$ppincode', '$pstate', '$occupation', '$employeename', '$yoe', '$phoneno', '$department', '$desigation', '$businessname', '$organisationtype') ";
if(mysqli_query($conn,$sql))
{
  
  echo '<script>alert("correct Account Number")</script>'; 
 }
  else
  {
    echo '<script>alert("Incorrect Account Number")</script>'; 
  }


}

  ?>
