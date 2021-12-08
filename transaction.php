<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM account");
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
          <a href="loginman.php" class="text-center"><button class="btn btn-login2">Return to home</button></a>  
    </nav>
    <div style="position: relative;min-height:50vh; background-image:  linear-gradient(
    120deg,
    hsl(192, 70%, 51%),
    hsl(136, 65%, 51%)
  );">
    <h1 class="text-center" id="title">View Your Transactions and Transfer Money</h1>
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

<div class="container">
    <br>
    <div class="row">
      <div class="col col-md-9">
     <a href="ViewTransaction.php"><button type="submit" name="submit" class="btn-login">View Transactions</button>
      </div>
      <div class="col col-md-3">
         <a href="transfermoney.php"><button type="button" class="btn-login">Transfer Money</button></a>
      </div>
    </div>
</div>

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>

