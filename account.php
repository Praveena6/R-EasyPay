<?php
include_once 'db.php';
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
  <body>
    <nav class="nav-bar navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="account.php">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaction.php">Transaction</a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="Loan.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Loan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Personal</a>
                <a class="dropdown-item" href="#">Vehicle</a>
                <a class="dropdown-item" href="#">Education</a>
                <a class="dropdown-item" href="homeloan.php">HomeLoan</a>
                <a class="dropdown-item" href="#">GoldLoan</a>
              </div>
            </li>
             <li class="nav-item ">
              <a class="nav-link" href="Gr.php">Greivance Redressal</a>
            </li>
          </ul>        
          </div> 
           <a href="loginhome.php" class="text-center"><button class="btn btn-login2">Return to home</button></a>  
    </nav>
    <header class="hero-section">
      <div class="hero-text-container">
        <h1>View Your 
          <br>Account Details</h1>
        <p
          >Take your financial life online. Your easy bank account<br />
          will be a one-stop-shop for spending,saving,<br />budgeting,investing,
          and much more.</p
        >
    <div class="container">
    <form >
      <label class="acc" required >Enter Your Account Number</label>
      <input type="text" class="form-control" name="accno" id="accno" value="<?php if (isset($_GET["accno"])) echo $_GET["accno"]; ?>"/>
      <br>
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
        if(isset($_GET['accno']))
        {
          $accno = $_GET['accno'];
          $sql1="SELECT * FROM  account where accno='$accno'";
          $result1=mysqli_query($con,$sql1);
          $total1=mysqli_num_rows($result1);
          if($total1==1)
          {
             $result = mysqli_query($conn,"SELECT * FROM account where accno='" . $_GET["accno"] . "'");
             ?>
    
    <div class="center" >
    <center>
      <table class="text-center">
      <tr> 
      <th>Name</th>
      <th>Account Number</th>
      <th>IFSC Number</th>
      <th>Balance</th>
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr class="<?php if(isset($classname)) echo $classname;?>">
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["accno"]; ?></td>
      <td><?php echo $row["ifsc"]; ?></td>
      <td><?php echo $row["balance"]; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table></center>
</div>
<?php
  }
  else
  {
    echo '<script>alert("Incorrect Account Number")</script>'; 
  }
}
?>
   </form>
   </div>
   </div>
      <div class="hero-img-container">
        <img src="./images/image-mockups.png" alt="" />
      </div>
    </header>
    
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>

