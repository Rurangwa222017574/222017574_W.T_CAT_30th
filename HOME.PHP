<?php
session_start();
  if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
  }
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
<!-- 
  <style>
    /* Normal link */
    a {
      padding: 10px;
      color: white;
      background-color: pink;
      text-decoration: none;
      margin-right: 15px;
    }

    /* Visited link */
    a:visited {
      color: purple;
    }
    /* Unvisited link */
    a:link {
      color: brown; /* Changed to lowercase */
    }
    /* Hover effect */
    a:hover {
      background-color: white;
    }

    /* Active link */
    a:active {
      background-color: red;
    }

    /* Extend margin left for search button */
    button.btn {
      margin-left: 15px; /* Adjust this value as needed */
      margin-top: 4px;
    }
    /* Extend margin left for search button */
    input.form-control {
      margin-left: 1300px; /* Adjust this value as needed */

      padding: 8px;
     
    }
  </style>
   -->

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


   
 
<section  id="hero" class="mt-5 bg-dark pt-5">
  <div class="container mt-5 pt-5">
  
      <div id="cover" class="mt-5 row">
        <div class="col-md-6 text-center">
          <h2 class="text-warning">WELCOME TO</h2>
          <h1>LOAN MANAGEMENT SYSTEM</h1>
          <p class="text-danger">Smart Loan - Better Life</p>

          <div class="mt-5 pt-5">
            <a href="apply.php" class="btn btn-success">Get started</a>
            <a href="home.php#contact" class="btn btn-primary">Talk to us</a>

          </div>
        </div>
        
        
        
        
      </div>
  </div>
  </section>

  <section id="services" class="bg-light pb-5">
    <div class="container">
      <h2 class="text-center mt-4 mb-4" id="services-title">Services we offer to you</h2>

      
        <div class="row">
          <div class="col-md-6" id="right">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Efficient Loan Origination</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
        <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6" id="top">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Robust Loan Approval Process</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6" id="left">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Loan Servicing and Management</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
        
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6" id="left2">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Risk Management and Compliance </h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-6" id="left">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Customer Relationship Management (CRM)</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
        
        <div class="row">
        <div class="col-md-6"></div>  
          <div class="col-md-6" id="top">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Operational Efficiency and Cost Reduction</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6" id="right">
            <div class="card bg-info">
              <div class="card-header">
                <h3>Performance Monitoring and Reporting</h3>
              </div>
              <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus, qui quas vel a ad! Fuga, maxime obcaecati optio, sint rem tempore quaerat velit impedit perferendis iure, vero quibusdam dolorum.
              </div>
            </div>
          </div>
        </div>
    </div>

  </section>
    <section id="contact">
      <div class="container">
        <h2 class="text-center pt-4" id="services-title">Contact us</h2>
        
        <div class="row">
          <div class="col-md-6 px-md-5">
            <div class="card mb-4 p-2 shadow" id="contact-form">
              <div class="card-body" id="call">
              <h3 class="card-title">Contact <i class="bi bi-person-circle"></i></h3>
                <h6><a href="tel:0780000000"><i class="bi bi-telephone"></i> 0780000000</h6>
                <h6><a href="whame:0780000000"><i class="bi bi-whatsapp"></i> 0780000000</h6>
                <h6><a href="mailto:loanmanagement@gmail.com"><i class="bi bi-envelope-open"></i> loanmanagement@gmail.com</a></h6>
              </div>
            </div>

            <div class="card mt-4 mb-4 p-2 shadow" id="contact-form">
              <div class="card-body">
                <h3 class="card-title mb-4">Address <i class="bi bi-geo-alt-fill"></i></h3>
                <h5>Kigali Rwanda</h5>
                <h5>KK 509 ST</h5>
              </div>
            </div>

          </div>
          <div class="col-md-6">
                        
            <div class="card shadow mb-4" id="contact-form">
                    <div class="card-body">
                        <div class="card-title mb-4 mt-2"><h3>Email us</h3></div>

                        <form action="login.php" method="post" id="form">
                            <label for="email">Email:</label>
                            <input type="email" name="email" required id="email" class="form-control mb-2 shadow" placeholder="Enter your email">
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" required id="subject" class="form-control shadow" placeholder="Enter subject">
                            
                            <label for="subject">Message:</label>
                            <textarea name="Message" rows="5" required id="Message" class="form-control shadow" placeholder="Enter Message"></textarea>
                            
                            <button type="submit" class="mt-3 btn btn-primary shadow" id="submit"><i class="bi bi-arrow-up-right-circle"></i> SEND </button>
     
                        </form>
                    </div>
                </div>

          </div>
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
