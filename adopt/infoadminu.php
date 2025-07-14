<?php 

    session_start();
    require_once 'config/db.php'; 
    if (!isset($_SESSION['user_login'])) { //เช็คการเข้าสู้ระบบ
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!'; //เตือน error
        header('location: index.php'); //ถ้ายังไม่ได้เข้าสู่ระบบก็กลับไปหน้าล็อกอิน
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลส่วนตัว</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c8e8ce3080.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Itim">
    <style>
      body {
        font-family: 'Itim', serif;
        font-size: 20px;
      }
    </style>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/686/686051.png">

    <link rel="stylesheet" href="ss.css"/>

    <link rel="stylesheet" href="../app.css"/>
</head>
<body>
     <!-- Navbar Start -->

     <nav class="navbar navbar-expand-lg bggen navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">

        <a href="admin.php" class="navbar-brand ms-lg-5">

            <h1 class="m-0 text-uppercase c"><i class="fa-solid fa-paw"></i> SAVE DOG&CAT</h1>

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto py-0">

                <a href="user.php" class="nav-item nav-link">ADOPT</a>

                <a href="History_Adopt.php" class="nav-item nav-link">History Adopt </a>

                <a href="infoadminu.php" class="nav-item nav-link active"><i class="fa-solid fa-gear"></i></a>

                <a href="logout.php" class="nav-item nav-link nav-contact  text-white px-5 ms-lg-5" style="background-color: #b73030;">Logout</a>

            </div>

        </div>

            <a href="user_adopt.php" class="nav-item nav-link" style="padding: 0 50px;"> </a>
    </nav>

    <!-- Navbar End -->
    
    <div class="container">
    <?php 
            //ดึงข้อมูลจากฐานข้อมูลมาแสดง
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            } 
            ?>
            <div class="text-center" style="font-size: 50px;">
                <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" class="rounded" alt="..." width="300px"><br>
                    <tr>
                        <td><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></td>
                    </tr>
                <hr>
            </div>
        <div>
            <h5>
                <table class="info" style="font-size: 30px;">
                     <tr>
                        <th>No. </th>
                        <td> : <?php echo $row['id'] ?></td>
                    </tr>
                    <tr>
                        <th> </th>
                    </tr>
                    <tr>
                        <th> </th>
                    </tr>
                    <tr>
                        <th>Gender </th>
                        <td> : <?php echo $row['gender'] ?></td>
                    </tr>
                    <tr>
                        <th> </th>
                    </tr>
                    <tr>
                        <th>Bithday </th>
                        <td> : <?php echo $row['bday'] ?></td>
                    </tr>
                    <tr>
                        <th> </th>
                    </tr>
                    <tr>
                        <th>Email </th>
                        <td> : <?php echo $row['email'] ?></td>
                    </tr>
                    <tr>
                        <th> </th>
                    </tr>
                    <tr>
                        <th>Status </th>
                        <td> : <?php echo $row['urole'] ?></td>
                    </tr>
                </table>
            </h5>
        </div>
        </div>
    
</body>
</html>