<?php 



    session_start();

    include_once 'config/dbConfig.php';

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>SAVE DOG&CAT - Donate</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="Free HTML Templates" name="keywords">

    <meta content="Free HTML Templates" name="description">

    <link rel="shortcut icon" type="image/x-icon" href="kisspng.ico" />

    <script src="https://kit.fontawesome.com/a2f1c127a4.js" crossorigin="anonymous"></script>



    <!-- Favicon -->

    <link href="img/favicon.ico" rel="icon">



    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  



    <!-- Icon Font Stylesheet -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">



    <!-- Libraries Stylesheet -->

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="app.css" rel="stylesheet">



    <!-- Template Stylesheet -->

    <link href="css/style.css" rel="stylesheet">

    <link href="s.css" rel="stylesheet">

    <script src="./promptpay-qr.js"></script>

    <script src="./qrcode.min.js"></script>

    <link href="./app.css" media="all" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        .customfile{
            border: 5px double rgb(48, 11, 168);
            border-radius: 50px;
            padding: 2px;
            font-size: 20px;
            color: blue;
        }
        .customfile::-webkit-file-upload-button{
            background-image: linear-gradient(45deg, rgb(255, 0, 76), rgb(12, 97, 224));
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
        }
    </style>
</head>

    <style>
        body{
	        background-color: #D2F4EA;
        }

        @import 'https://fonts.googleapis.com/css?family=Kanit|Prompt';

          .jumbotron { padding: 15px;

            font-family: 'Kanit', sans-serif;

            background: linear-gradient(45deg,#F17C58, #E94584, #24AADB , #27DBB1,#FFDC18, #FF3706);

            background-size: 600% 100%;

            animation: gradient 5s linear infinite;

            animation-direction: alternate;

            background-repeat: no-repeat;

            background-attachment: fixed;

            background-position: center;
            

          

      }

  

      @keyframes gradient {

          0% {background-position: 0%}

          100% {background-position: 100%}

          

           }

          

        </style>

</head>



<body>







    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bggen navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">

        <a href="index.html" class="navbar-brand ms-lg-5">

            <h1 class="m-0 text-uppercase c"><i class="fa-solid fa-paw"></i> SAVE DOG&CAT</h1>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto py-0">

                <a href="index.html" class="nav-item nav-link">Home</a>

                <a href="Donate.php" class="nav-item nav-link">Donate</a>

                <a href="contact.html" class="nav-item nav-link">Contact</a>



                <a href="adopt/index.php" class="nav-item nav-link nav-contact bg text-white px-5 ms-lg-5">Adopt <i class="bi bi-arrow-right"></i></a>

            </div>

        </div>

    </nav>

    <!-- Navbar End -->





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   

    <div class="bb">

      <!-- Content here -->

    

    <div class="jumbotron jumbotron-fluid">

      <div class="container">

        <center><h1>บริจาค ให้อาหาร น้องหมา น้องแมว จรจัด</h1>

        <p class="lead" style="font-size: 30px; color:#FFFFFF;">ธนาคารไทยพาณิชย์</p>

        <p class="lead">ชื่อบัญชี "มูลนิธิสันติสุขเพื่อสุนัขและแมวจรจัด"</p>

        <p class="lead"><h2>เลขที่บัญชี : 403-7-834644</h2></p>

       <p class="lead">บริจาคเสร็จแล้วกรุณาอัพโหลดสลิปไว้ข้างล่างด้วยครับ/ค่ะ</p>

        </center>

      </div>

      

      </div>

    </div>

   

  </div>



    <!-- Team Start -->

    <div class="container bo bb">

        <div class="row mt-5">

            <div class="col-12">

                <form action="upload.php" method="POST" enctype="multipart/form-data">

                    <div class="text-center justify-content-center align-items-center p-4 border-2 border-dashed rounded-3">

                        <h6 class="my-2">อัพโหลดสลิปบริจาคเงินได้ที่นี่ ("ขอบคุณที่ช่วยบริจาคให้กับน้องหมาน้องแมวจรจัดนะครับ/ค่ะ")</h6>

                        <input type="file" name="file" class="customfile" accept="image/gif, image/jpeg, image/png">

                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG, PNG & GIF files are allowed to upload</p>

                    </div>

                    <div>
                        <center>
                            <div class="g-recaptcha" data-sitekey="6Lfjea8kAAAAANswBwpi7jAP6vfOCo_kQCj6D3xw"></div>
                        </center>
                    </div><br>

                    <div class="con">
                    <center>
                        <input type="submit" name="submit" value="Upload" class="bttn">
                    </center>
                    <br>
                        
                    </div>

                </form>

            </div>

        </div>

        <div class="row">

            <?php  if (!empty($_SESSION['statusMsg'])) { ?>

                <div class="alert alert-success" role="alert">

                    <?php 

                        echo $_SESSION['statusMsg']; 

                        unset($_SESSION['statusMsg']);

                    ?>

                </div>

            <?php } ?>
            <?php if(isset($_SESSION['error'])) { ?>

                <div class="alert alert-danger" role="alert">

                    <?php 

                        echo $_SESSION['error'];

                        unset($_SESSION['error']);

                    ?>

                </div>

            <?php } ?>

        </div>



        <div class="row g-2">

            <?php 

                $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

                if ($query->num_rows > 0) {

                    while($row = $query->fetch_assoc()) {

                        $imageURL = 'uploads/'.$row['file_name'];

                    ?>

                    <div class="col-sm-6 col-lg-4 col-xl-3 bb pp ">

                        <div class=" shadow ">

                            <img src="<?php echo $imageURL ?>" alt="" width="100%" >

                        </div>

                    </div>

                <?php 

                    }

                } else { ?>

                <p>No image found...</p>

            <?php } ?>

        </div>

    </div>

    <!-- Team End -->





    <!-- Footer Start -->

    <div class="container-fluid bgg mt-5 py-5">

        <div class="container pt-5">

            <div class="row g-5">

                <div class="col-lg-3 col-md-6">

                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>

                    <p class="mb-4">เว็บไซต์นี้เป็นส่วนหนึ่งของโครงงานวิชาความเป็นพลเมืองกับการพัฒนาท้องถิ่น มหาวิทยาลัยราชภัฏเชียงใหม่</p>

                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>114/281 หมุ่ 1 หมู่บ้านเวียงดอย ต.ป่าป้อง อ.ดอยสะเก็ด จ.เชียงใหม่ 50220<p>

                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>santisookdogsandcats@gmail.com</p>

                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>081-6382105, 083-7818439</p>

                </div>

                <div class="col-lg-3 col-md-6">

                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>

                    <div class="d-flex flex-column justify-content-start">

                        <a class="text-body mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>

                        <a class="text-body mb-2" href="Donate.php"><i class="bi bi-arrow-right text-primary me-2"></i>Donate</a>

                        <a class="text-body mb-2" href="contact.html"><i class="bi bi-arrow-right text-primary me-2"></i>contact</a>

                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Adopt</a>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6">

                    <h6 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Follow Us</h6>

                    <div class="d-flex">

                        <a class="btn btn-outline-primary btn-square me-2" target ="_blank" href="https://www.facebook.com/santisookdogandcat.org/"><i class="bi bi-facebook"></i></a>

                    </div>

                </div>

               

            </div>

        </div>

    </div>

    <div class="container-fluid bg-dark text-white-50 py-4">

        <div class="container">

            <div class="row g-5">

                <div class="col-md-6 text-center text-md-start">

                    <p class="mb-md-0">&copy; <a class="text-white" href="#">SAVE DOG&CAT</a>. All Rights Reserved.</p>

                </div>

                <div class="col-md-6 text-center text-md-end">

                    <p class="mb-0">Designed by <a class="text-white" target ="_blank" href="https://www.facebook.com/kritsanai.mex/">Night Brain</a></p>

                </div>

            </div>

        </div>

    </div>

    <!-- Footer End -->





    <!-- Back to Top -->

    <a href="#" class="btn bgg py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>





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