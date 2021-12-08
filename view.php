<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM transfer where accno='" . $_GET["accno"] . "'");
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
            <li class="nav-item">
              <a class="nav-link" href="account.php">Account</a>
            </li>
            <li class="nav-item  active">
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
    </nav>

<div class="container">
    <br>
    <div class="row">
      <div class="col col-md-9">
        <a href="ViewTransaction.php"><button type="button" class="btn-login">View Transactions</button></a>
      </div>
      <div class="col col-md-3">
         <a href="acctrasfer.php"><button type="button" class="btn-login">Transfer Money</button></a>
      </div>
    </div>
</div>
<div class="container" id="ViewTransaction">
  <p class="Transfer">View Transactions</p>

 <div class="center" >
    <center>
      <table class="text-center">
      <tr> 
      <th>Transfered To</th>
      <th>Reciver Account Number</th>
      <th>Transfered Amount</th>
      </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr class="<?php if(isset($classname)) echo $classname;?>">
      <td><?php echo $row["tname"]; ?></td>
      <td><?php echo $row["taccno"]; ?></td>
      <td><?php echo $row["tamount"]; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table></center>
</div></div>

  
  
  
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

