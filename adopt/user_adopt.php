<?php 

    session_start();



    require_once 'config/db.php';



    if (!isset($_SESSION['admin_login'])) {



        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';



        header('location: index.php');



    }

    if (isset($_GET['delete'])) {



        $delete_id = $_GET['delete'];



        $deletestmt = $conn->query("DELETE FROM adopt WHERE id = $delete_id");



        $deletestmt->execute();



        



        if ($deletestmt) {



            echo "<script>alert('Data has been deleted successfully');</script>";



            $_SESSION['success'] = "Data has been deleted succesfully";



            header("refresh:1; url=user_adopt.php");



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
    <link href="../app.css" rel="stylesheet">
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

	<title>DATA USER ADOPT</title>
</head>
<body>


<!-- SIDEBAR -->
<section id="sidebar">
			<a href="admin.php" class="brand" style="text-decoration: none">
				<i class='bx'><i class="fa-solid fa-paw"></i></i>
				<span class="text">ADMIN</span>
			</a>
			<ul class="side-menu top">
				<li>
					<a href="admin.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-dog"></i></i>
						<span class="text">Dashboard DOG</span>
					</a>
				</li>
				<li>
					<a href="adminc.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-cat"></i></i>
						<span class="text">Dashboard CAT</span>
					</a>
				</li>
				<li class="active">
					<a href="user_adopt.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-house-chimney"></i></i>
						<span class="text">User Adopt</span>
					</a>
				</li>
				<li>
					<a href="urole.php" style="text-decoration: none">
						<i class='bx' ><i class="fa-solid fa-user-shield"></i></i>
						<span class="text">Urole</span>
					</a>
				</li>
			</ul>
			<ul class="side-menu">
				<li>
					<a href="profile.php" style="text-decoration: none">
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
			<a  class="nav-link">V.3.0.0</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="user_adopt.php" class="notification">
			<?php

				$sql = "SELECT COUNT(*) as adoptt FROM adopt";

				$query = $conn->prepare($sql);

				$query->execute();

				$fetch = $query->fetch();

			?>  
				<i class='bx bxs-bell' ></i>
				<span class="num"><?= $fetch['adoptt'] ?></span>
			</a>
			<a href="profile.php" class="profile">
				<img src="img/user.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<a href="admin.php"style="font-size: 50px;">Dashboard User Adopt</a>
					<ul class="breadcrumb">
						<li>
							<a href="admin.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="user_adopt.php" style="text-decoration: none">User_Adopt</a>
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
				<li>
				<i class="bx"><h2><i class="fa-solid fa-house"></i></h2></i>
					<?php

						$sql = "SELECT COUNT(*) as adoptt FROM adopt";

						$query = $conn->prepare($sql);

						$query->execute();

						$fetch = $query->fetch();

					?>  
					<span class="text">
					<p class="ha"><?= $fetch['adoptt'] ?> คน</p>
						<p>ADOPT</p>
					</span>
				</li>
				<li>
				<span class="text" style="font-size: 20px;">
				<p><i class="bx"><i class="fa-solid fa-user"></i></i></p>
				</span>
					<?php

						$sql = "SELECT COUNT(*) as userst FROM users";

						$query = $conn->prepare($sql);

						$query->execute();

						$fetch = $query->fetch();

					?>
					<span class="text">
					<p class="ha"><?= $fetch['userst'] ?> คน</p>
						<p>USER</p>
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
					<span class="ha">รายชื่อผู้ขอรับเลี้ยง สุขนัขและแมว</span><h3></h3>
					</div>
					
					<table>
						<thead>
							<tr>
							<th> </th>
							<th style="font-size: 20px;">ข้อมูลการรับเลี้ยง</th>
							<th style="font-size: 20px;">ข้อมูลการติดต่อ</th>
							<th style="font-size: 20px;">เหตุผล</th>
							<th style="font-size: 20px;">รูปสถานที่รับเลี้ยง</th>
							<th style="font-size: 20px;">จัดการ</th>
							</tr>
						</thead>
						<tbody>
						<?php 

							$stmt = $conn->query("SELECT * FROM adopt");

							$stmt->execute();

							$userss = $stmt->fetchAll();

							if (!$userss) {

								echo "<tr><td colspan='6' class='text-center'>No Adopt</td></tr>";

							} else {

								foreach ($userss as $user) {

							?>

							<tr>
							<td> </td>

							<td width="270px" style="font-size: 20px; ">

							<b>ลำดับที่      :</b> <?= $user['id']; ?> <br>

							<b>คำนำหน้า     :</b> <?= $user['prefix']; ?> <br>

							<b>ชื่อ          :</b> <?= $user['firstname']; ?> <?= $user['lastname']; ?> <br>

							<b>IDรับเลี้ยง     :</b> <?= $user['id_adopt']; ?> <br>		

							<b>สถานะ       :</b> <?= $user['statuss']; ?> <br>

							</td>

							<td width="260px" style="font-size: 20px; ">

							<b>เบอร์โทร       :</b> <?= $user['tle']; ?><br>

							<b>อีเมล์         :</b> <br><?= $user['email']; ?><br>

							<b>ที่อยู่          :</b> <br><?= $user['addresss']; ?><br>

							<b>ณ วันที่       :</b> <br><?= $user['date']; ?><br>


							</td>

							<td width="250px" style="font-size: 20px; ">

							<b>เหตุผลที่ต้องการรับเลี้ยง       :</b> <?= $user['reason']; ?><br>

							</td>

							<td width="300px"><img width="100%" src="upload/<?= $user['imgg']; ?>" class="rounded" alt=""></td>

							<td>

								<a href="submit.php?id=<?= $user['id']; ?>" class="button button1">Submit</a>

								<a data-id="<?= $user['id']; ?>" href="?delete=<?= $user['id']; ?>" class="button button3 delete-btn">Delete</a>

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

                                url: 'user_adopt.php',

                                type: 'GET',

                                data: 'delete=' + userId,

                            })

                            .done(function() {

                                Swal.fire({

                                    title: 'success',

                                    text: 'Data deleted successfully!',

                                    icon: 'success',

                                }).then(() => {

                                    document.location.href = 'user_adopt.php';

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