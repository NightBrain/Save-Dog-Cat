<?php 







    session_start();



    require_once 'config/db.php';







?>







<!DOCTYPE html>



<html lang="en">



<head>



    <meta charset="UTF-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>SIGNUP ADOPT</title>



    <script src="https://kit.fontawesome.com/a2f1c127a4.js" crossorigin="anonymous"></script>



    <link rel="shortcut icon" type="image/x-icon" href="kisspng.ico" />



    

    <!-- Font-->



	<link rel="stylesheet" type="text/css" href="css1/nunito-font.css">



	<!-- Main Style Css -->



    <link rel="stylesheet" href="css1/style.css"/>



    <link rel="stylesheet" href="ss.css"/>



    <link rel="stylesheet" href="../app.css"/>



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



                <a href="../Donate.html" class="nav-item nav-link">Donate</a>



                <a href="../contact.html" class="nav-item nav-link">Contact</a>



          



                <a href="index.php" class="nav-item nav-link nav-contact bg text-white px-5 ms-lg-5">Adopt <i class="bi bi-arrow-right"></i></a>



            </div>



        </div>



    </nav>



    <!-- Navbar End -->

   

            <div class="form-v9">

            

                <div class="page-content">



                    <div class="form-v9-content" style="background-image: url('images/form-v11.jpg')">

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



                    <?php if(isset($_SESSION['warning'])) { ?>



                    <div class="alert alert-warning" role="alert">



                        <?php 



                            echo $_SESSION['warning'];



                            unset($_SESSION['warning']);



                        ?>



                    </div>



                    <?php } ?>



                        <form id="reg"class="form-detail" action="signup_db.php" method="post">



                            <h2 style="color: #fff;">Registration</h2>



                            <div class="form-row-total">



                                <div class="form-row">



                                    <input type="text" name="firstname"  class="input-text" placeholder="First name" required>



                                </div>



                                <div class="form-row">



                                    <input type="text" name="lastname"  class="input-text" placeholder="Last name" required>



                                </div>



                            </div>



                            <div class="form-row-total" style="padding: 0 10px;">



                                <div class="form-row">



                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="gender" value="Male" >

                                </div> <div class="b" style="padding: 0 30px; font-size: 20px;">Male</div>

                              

                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="gender" value="Female">

                                </div> <div class="g" style="padding: 0 30px; font-size: 20px;">Female</div>

                               

                                </div>



                                <div class="form-row">



                                    <input class="input-text" style="color: #fff;" type="date" name="bday">



                                </div>

                            </div>



                            <div class="form-row-total">



                                <div class="form-rowip">



                                    <input type="text" name="email"  class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">



                                </div>



                            </div>



                            <div class="form-row-total">



                                <div class="form-row">



                                    <input type="password" name="password"  class="input-text" placeholder="Password" required>



                                </div>



                                <div class="form-row">



                                    <input type="password" name="c_password"  class="input-text" placeholder="Comfirm Password" required>



                                </div>



                            </div>



                            <div>

                                <center>

                                    <div class="g-recaptcha" data-sitekey="6Lfjea8kAAAAANswBwpi7jAP6vfOCo_kQCj6D3xw"></div>

                                </center>

                            </div><br>



                            <div class="form-row-last">



                                <button type="submit" class="btttn f" name="signup"><b>Register</b></button>



                            </div>



                        </form>



                        <hr>



                        <center>

                            

                            <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a class="fgg" href="index.php">เข้าสู่ระบบ</a></p>



                        </center>



                    </div>



                </div>



            </div>

            



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>



</html>



