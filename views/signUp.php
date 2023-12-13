
<?php

require __DIR__ .'../../config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/signUp.css" />
</head>
<style>
                  .error{
                    width: 100%;
                    font-size: 15px;
                    color:red ;
                    font-family: Arial, Helvetica, sans-serif;
                    display: none;
                  }
            </style>
<body>
  <!-- Section: Design Block -->
<section class="text-center text-lg-start">
 

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>

          
            <form action="../controller/signUp.php" method="post">
                <div class="form-outline mb-4">
                <label class="form-label d-flex flex-row" for="form3Example3">Full name</label>
                <input type="text" id="name" class="form-control" name="fullname" />
                <span class="error">invalid name</span>
              
              </div>
            

              <!-- Email input -->
              <div class="form-outline mb-4">
              <label class="form-label d-flex flex-row" for="form3Example3">Email address</label>
                <input type="email" id="email" class="form-control" name="email" />
                <span class="error">invalid email</span>
               
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
              <label class="form-label d-flex flex-row" for="form3Example4">Password</label>
                <input type="password" id="password" class="form-control" name="password" />
                <span class="error">invalid password</span>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" name="addUser" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>
              <p>I have an account <a href="/Full_brief/views/login.php">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="../assets/img/design.PNG" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/signUp.js"></script>
</body>
</html>