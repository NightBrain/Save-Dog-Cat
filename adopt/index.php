<?php session_start(); ?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN ADOPT DOG&CAT</title>

    <link rel="shortcut icon" type="image/x-icon" href="kisspng.ico" />

    <script src="https://kit.fontawesome.com/a2f1c127a4.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- Loding font -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->

    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Template Stylesheet -->

    <link href="css/style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="s.css" rel="stylesheet">

    <link href="../app.css" rel="stylesheet">

</head>

<body>



    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bgg navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">

        <a href="index.php" class="navbar-brand ms-lg-5">

            <h1 class="m-0 text-uppercase c"><i class="fa-solid fa-paw"></i> SAVE DOG&CAT</h1>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto py-0">

                <a href="../index.html" class="nav-item nav-link ">Home</a>

                <a href="../Donate.php" class="nav-item nav-link">Donate</a>

                <a href="../contact.html" class="nav-item nav-link">Contact</a>

          

                <a href="index.php" class="nav-item nav-link nav-contact bg text-white px-5 ms-lg-5">Adopt <i class="bi bi-arrow-right"></i></a>

            </div>

        </div>

    </nav>

    <!-- Navbar End -->



    <!-- Backgrounds -->



    <div id="login-bg" class="container-fluid">



      <div class="bg-img"></div>

      <div class="bg-color"></div>

    </div>



    <!-- End Backgrounds -->



    <div class="container" id="login">

        <div class="row justify-content-center">

        <div class="col-lg-8">

          <div class="login">



            <h1>Login</h1>

            

            <!-- Loging form -->

                  <form action="signin_db.php" method="post">

                    <div class="form-group">

                      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">

                      

                    </div>

                    <div class="form-group">

                      <input type="password" class="form-control" name="password" placeholder="Password">

                    </div>

                    <div>
                                <center>
                                    <div class="g-recaptcha" data-sitekey="6Lfjea8kAAAAANswBwpi7jAP6vfOCo_kQCj6D3xw"></div>
                                </center>
                    </div>

                    <br>

                    <button type="submit" class="btttn f" name="signin"><b>Sign in</b></button>

                    <br>

                    <br>

                   

                    <div>

                      <label class="forgot-password"><a href="signup.php">Registration<a></label>

                    </div>

                  </form>

             <!-- End Loging form -->
  <br><br>
             <?php if(isset($_SESSION['error'])) { ?>

              <div class="alert alert-danger" role="alert">

                  <?php 

                      echo $_SESSION['error'];

                      unset($_SESSION['error']);

                  ?>

              </div>

              <?php } ?>

              <?php if(isset($_SESSION['success'])) { ?>

              <div class="alert alert-success" role="alert">

                  <?php 

                      echo $_SESSION['success'];

                      unset($_SESSION['success']);

                  ?>

              </div>

              <?php } ?>

          </div>

        </div>

        </div>

    </div>

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>

    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Template Javascript -->

    <script src="js/main.js"></script>

</body>

</html>