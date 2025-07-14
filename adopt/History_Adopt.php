<?php 

    session_start();



    require_once 'config/db.php';

	if (!isset($_SESSION['user_login'])) {



        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';



        header('location: index.php');



    }


    if (isset($_GET['delete'])) {



        $delete_id = $_GET['delete'];



        $deletestmt = $conn->query("DELETE FROM userss WHERE id = $delete_id");



        $deletestmt->execute();



        



        if ($deletestmt) {



            echo "<script>alert('Data has been deleted successfully');</script>";



            $_SESSION['success'] = "Data has been deleted succesfully";



            header("refresh:1; url=admin.php");



        }



    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="../app.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
	<script src="https://kit.fontawesome.com/a2f1c127a4.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" type="image/x-icon" href="kisspng.ico" />

	<link rel="stylesheet"

          href="https://fonts.googleapis.com/css?family=Itim">

    <style>

      body {

        font-family: 'Itim', serif;

      }

    </style>

	<title>HISTORY ADOPT</title>

</head>
<body>


<!-- SIDEBAR -->
<section id="sidebar">
			<a href="user.php" class="brand" style="text-decoration: none">
				<i class='bx'><i class="fa-solid fa-paw"></i></i>
				<span class="text">ADOPT</span>
			</a>
			<ul class="side-menu top">
				<li>
					<a href="user.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-dog"></i></i>
						<span class="text">Adopt DOG</span>
					</a>
				</li>
				<li >
					<a href="userc.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-cat"></i></i>
						<span class="text">Adopt CAT</span>
					</a>
				</li>
				<li class="active">
					<a href="History_Adopt.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-clock-rotate-left"></i></i>
						<span class="text">History_Adopt</span>
					</a>
				</li>
			</ul>
			<ul class="side-menu">
				<li>
					<a href="profileu.php" style="text-decoration: none">
						<i class='bx bxs-cog' ></i>
						<span class="text">Settings</span>
					</a>
				</li>
				<li>
					<a href="logout.php" class="logout" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-right-from-bracket"></i></i>
						<span class="text">Logout</span>
					</a>
				</li>
			</ul>
		</section>
		<!-- SIDEBAR -->
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a class="nav-link">V.3.0.0</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="History_Adopt.php" class="notification">
			<?php

				$sql = "SELECT COUNT(*) as adoptt FROM adopt";

				$query = $conn->prepare($sql);

				$query->execute();

				$fetch = $query->fetch();

			?>  
				<i class='bx bxs-bell' ></i>
				<span class="num"><?= $fetch['adoptt'] ?></span>
			</a>
			<a href="profileu.php" class="profile">
				<img src="img/user.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
				<?php 

				if (isset($_SESSION['user_login'])) {

					$user_id = $_SESSION['user_login'];

					$stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");

					$stmt->execute();

					$row = $stmt->fetch(PDO::FETCH_ASSOC);

				}

				?>
					<a href="admin.php"style="font-size: 30px;">SAVE DOG & CAT  ยินดีต้อนรับ : คุณ <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></a>
					<ul class="breadcrumb">
						<li>
							<a href="admin.php">Adopt</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="user.php" style="text-decoration: none">HISTORY ADOPT</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
				<i class="bx"><h2><i class="fa-solid fa-dog"></i></h2></i>
					<?php

						$sql = "SELECT COUNT(*) as userss FROM userss";

						$query = $conn->prepare($sql);

						$query->execute();

						$fetch = $query->fetch();

					?>
					<span class="text">
						<p class="ha"><?= $fetch['userss'] ?> ตัว</p>
						<p>DOG</p>
					</span>
				</li>
				<li>
				<i class="bx"><h2><i class="fa-solid fa-cat"></i></h2></i>
					<?php

						$sql = "SELECT COUNT(*) as catt FROM cat";

						$query = $conn->prepare($sql);

						$query->execute();

						$fetch = $query->fetch();

					?>
					<span class="text">
					<p class="ha"><?= $fetch['catt'] ?> ตัว</p>
						<p>CAT</p>
					</span>
				</li>
				
			</ul>
			
			<div class="table-data">
				<div class="order">
				<?php if (isset($_SESSION['success'])) { ?>

					<div class="w3-panel w3-pale-green">

						<?php 

							echo $_SESSION['success']; 

							unset($_SESSION['success']);
	
						?>

					</div>

					

				<?php } ?>

				<?php if (isset($_SESSION['error'])) { ?>

					<div class="w3-panel w3-pale-red">

						<?php 

							echo $_SESSION['error']; 

							unset($_SESSION['error']);

						?>

					</div>

				<?php } ?>
					<div class="head">
					<span class="ha">HISTORY ADOPT</span><h3></h3>
					</div>
					<table>
						<thead>
							<tr>
							<th style="font-size: 20px;">ลำดับ</th>
							<th style="font-size: 20px;">ข้อมูลการรับเลี้ยง</th>
							<th style="font-size: 20px;">สถานะการรับเลี้ยง</th>
							</tr>
						</thead>
						<tbody>
						<?php 

							$stmt = $conn->query("SELECT * FROM adopt");

							$stmt->execute();

							$userss = $stmt->fetchAll();

							if (!$userss) {

								echo "<tr><td colspan='6' class='text-center'>No DOG Give Adopt</td></tr>";

							} else {

								foreach ($userss as $user) {

							?>

							<tr>

							<td width="300px" style="font-size: 20px; color: #212121;">



							ลำดับที่       : <?= $user['id']; ?><br>       



							</td>



							<td width="300px" style="font-size: 20px; color: #212121;">



							คำนำหน้า     : <?= $user['prefix']; ?><br>



							ชื่อ          : <?= $user['firstname']; ?> <?= $user['lastname']; ?><br>



							ID รับเลี้ยง     : <?= $user['id_adopt']; ?><br>



							</td>



							<td width="500px" style="font-size: 20px; color: #212121;">



							สถานะ       : <?= $user['statuss']; ?><br>



							ณ วันที่       : <?= $user['date']; ?><br>



							</td>

							</tr>
							<?php } 
							} ?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script2.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script>



        let imgInput = document.getElementById('imgInput');



        let previewImg = document.getElementById('previewImg');







        imgInput.onchange = evt => {



            const [file] = imgInput.files;



            if (file) {



                previewImg.src = URL.createObjectURL(file);



            }



        }







        $(".delete-btn").click(function(e) {



            var userId = $(this).data('id');



            e.preventDefault();



            deleteConfirm(userId);



        })







        function deleteConfirm(userId) {



            Swal.fire({



                title: 'Are you sure?',



                text: "It will be deleted permanently!",



                showCancelButton: true,



                confirmButtonColor: '#3085d6',



                cancelButtonColor: '#d33',



                confirmButtonText: 'Yes, delete it!',



                showLoaderOnConfirm: true,



                preConfirm: function() {



                    return new Promise(function(resolve) {



                        $.ajax({



                                url: 'admin.php',



                                type: 'GET',



                                data: 'delete=' + userId,



                            })



                            .done(function() {



                                Swal.fire({



                                    title: 'success',



                                    text: 'Data deleted successfully!',



                                    icon: 'success',



                                }).then(() => {



                                    document.location.href = 'admin.php';



                                })



                            })



                            .fail(function() {



                                Swal.fire('Oops...', 'Something went wrong with ajax !', 'error')



                                window.location.reload();



                            });



                    });



                },



            });



        }



    </script>
</body>
</html>