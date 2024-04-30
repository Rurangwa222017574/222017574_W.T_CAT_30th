<?php
session_start();
  if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
  }
  include 'db.php';
  $userid = $_SESSION['user_id'];
  $getLoans = mysqli_query($con, "SELECT * FROM loan_applications WHERE user_id = $userid");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Linking to external stylesheet -->
  <link rel="stylesheet" type="text/css" href="style.css" title="style 1" media="screen, tv, projection, handheld, print"/>
  <!-- Defining character encoding -->
  <meta charset="utf-8">
  <!-- Setting viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loan Management</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<!-- <body style="background-image: url('./Images/stock.avif');"> -->
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 fixed-top border-bottom">
    <div class="container">
      <a class="navbar-brand" href="home.php">LOAN MANAGEMENT SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myloans.php">MY LOANS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php#services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php#contact">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payments.php">PAYMENTS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              USER
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-key-fill"></i> Change password</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          
          <a href="apply.php" class="btn btn-outline-primary btn-sm" type="button">Apply for loan</a>
        </div>
      </div>
    </div>
  </nav>


   
    <section id="heros">
      <div class="container">
        <div class="row  mt-5 pt-4">
          <div class="col-md-1"></div>

          <div class="col-md-10">
          <h3 class="text-center mb-4">My loans</h3>
          
            <div class="card mb-4 bg-white" id="contact-form">
                    <div class="card-body">
                      <div class="table-responsive">  
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Amount</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Options</th>

                            </tr>
                            <?php
                              while($rows = mysqli_fetch_array($getLoans)){?>
                                <tr>
                                    <td><?php echo $rows["id"]; ?></td>
                                    <td><?php echo $rows["amount"]; ?></td>
                                    <td><?php echo $rows["description"]; ?></td>
                                    <td><?php echo $rows["date"]; ?></td>
                                    <td>
                                      <?php
                                        if($rows["status"] == 0) echo "Pending"; 
                                        else if($rows["status"] == 1) echo "Approved"; 
                                        else if($rows["status"] == 2) echo "Rejected"; 
                                      ?>
                                    </td>
                                    
                                    <td> 
                                      <?php
                                        if($rows["status"] == 0){?>
                                      <a href="editloan.php?id=<?php echo $rows["id"]?>" class="btn btn-primary btn-sm">Edit</a>
                                      <?php
                                        }
                                        if($rows["status"] == 0 || $rows["status"] == 2){?>
                                      <a href="deleteloan.php?id=<?php echo $rows["id"]?>" class="btn btn-danger btn-sm">Delete</a>
                                      <?php
                                        }
                                        if($rows["status"] == 1){?>
                                          <a href="payloan.php?id=<?php echo $rows["id"]?>" class="btn btn-success btn-sm">Pay</a>
                                          <?php
                                        }?>
                                    </td>
                                </tr>
                            <?php
                              }
                            ?>
                        </table>
                      </div>
                     
                    </div>
                </div>

           </div>
           <div class="col-md-1"></div>
        </div>
      </div>
      
    </section>

  
  <footer class="bg-dark text-light">
    <div class="container">
      <div class="row pt-4">
        <div class="col-md-4">
          <h5 class="mb-3">About</h5>
          <div id="detail" class="mb-3">
          Loan Management System is a cutting-edge digital platform designed to assist you in automating and streamlining the entire loan lifecycle. 
          From application to disbursement, we centralize your data and accelerates decision-making.
          Say goodbye to traditional paper-based, we revolutionize loan servicing for the modern era.
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="mb-3">Useful links</h5>
          <div id="detail" class="mb-3 ps-3">
            <a href="" class="d-block">&rarr; Apply for loan</a>
            <a href="" class="d-block">&rarr; My loans</a>
            <a href="" class="d-block">&rarr; Loan repayment</a>
            <a href="" class="d-block">&rarr; Services</a>
            <a href="" class="d-block">&rarr; Contact</a>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="mb-3">Reach to us</h5>
              <div id="detail" class="mb-3">
                <h6><a href="tel:0780000000"><i class="bi bi-telephone"></i> 0780000000</h6>
                <h6><a href="whame:0780000000"><i class="bi bi-whatsapp"></i> 0780000000</h6>
                <h6><a href="mailto:loanmanagement@gmail.com"><i class="bi bi-envelope-open"></i> loanmanagement@gmail.com</a></h6>
                
                <br>
                <h5>Kigali Rwanda</h5>
                <h5>KK 509 ST</h5>
              </div>
        </div>
      </div>
      <div class="text-center pb-4">Designed and implemented by Samson RURANGWA&reg, @UR CBE BIT, 2024. &copy All right reserved </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>
