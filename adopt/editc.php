<?php 



    session_start();

    require_once "config/db.php";



    // if (isset($_POST['update'])) {

    //     $id = $_POST['id'];

    //     $firstname = $_POST['firstname'];

    //     $lastname = $_POST['lastname'];

    //     $position = $_POST['position'];

    //     $img = $_FILES['img'];



    //     $img2 = $_POST['img2'];

    //     $upload = $_FILES['img']['name'];



    //     if ($upload != '') {

    //         $allow = array('jpg', 'jpeg', 'png');

    //         $extension = explode(".", $img['name']);

    //         $fileActExt = strtolower(end($extension));

    //         $fileNew = rand() . "." . $fileActExt;

    //         $filePath = "uploads/".$fileNew;



    //         if (in_array($fileActExt, $allow)) {

    //             if ($img['size'] > 0 && $img['error'] == 0) {

    //                 move_uploaded_file($img['tmp_name'], $filePath);

    //             }

    //         }

    //     } else {

    //         $fileNew = $img2;

    //     }



    //     $sql = $conn->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, position = :position, img = :img WHERE id = :id");

    //     $sql->bindParam(":id", $id);

    //     $sql->bindParam(":firstname", $firstname);

    //     $sql->bindParam(":lastname", $lastname);

    //     $sql->bindParam(":position", $position);

    //     $sql->bindParam(":img", $fileNew);

    //     $sql->execute();



    //     if ($sql) {

    //         $_SESSION['success'] = "Data has been updated succesfully";

    //         header("refresh:2; url=index.php");

    //     } else {

    //         $_SESSION['error'] = "Data has not been updated succesfully";

    //         header("location: index.php");

    //     }

    // }



?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDIT DATA</title>

    <link rel="shortcut icon" type="image/x-icon" href="kisspng.ico" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <style>

        .container {

            max-width: 550px;

        }

    </style>



</head>

<body>



    <div class="container mt-5">

        <h1>Edit Data</h1>

        <hr>

        <form action="updatec.php" method="post" enctype="multipart/form-data">

            <?php 

                if (isset($_GET['id'])) {

                    $id = $_GET['id'];

                    $stmt = $conn->query("SELECT * FROM cat WHERE id = $id");

                    $stmt->execute();

                    $data = $stmt->fetch();

                }

            ?>

            <div class="mb-3 row">

                <label for="firstname" class="col-sm-3 col-form-label"><b>ลำดับ:</b></label>
                <div class="col-sm-8">
                    <input type="text" readonly value="<?= $data['id']; ?>" required class="form-control" name="id">
                </div>

            </div>

            <div class="mb-3 row">

                <label for="lastname" class="col-sm-3 col-form-label"><b>ID:</b></label>
                <div class="col-sm-8">
                    <input type="text" value="<?= $data['firstname']; ?>" required class="form-control" name="firstname">
                </div>

            </div>

            <div class="mb-3 row">

                <label for="lastname" class="col-sm-3 col-form-label"><b>ชื่อ</b></label>
                <div class="col-sm-8">
                    <input type="text" value="<?= $data['lastname']; ?>" required class="form-control" name="lastname">
                </div>

            </div>

            <div class="mb-3 row">

                <label for="sex" class="col-sm-3 col-form-label"><b>เพศ:</b></label>
                <div class="col-sm-8">
                    <input type="text" value="<?= $data['sex']; ?>" required class="form-control" name="sex">
                </div>

            </div>

            <div class="mb-3 row">

                <input type="hidden" value="<?= $data['img']; ?>" required class="form-control" name="img2">

            </div>

            <div class="mb-3 row">

                <label for="img" class="col-sm-3 col-form-label"><b>รูปภาพ:</b></label>
                <div class="col-sm-8">
                <input type="file" class="form-control" id="imgInput" name="img">
                <img width="100%" src="uploadss/<?= $data['img']; ?>" id="previewImg" alt="">
                </div>

                
            </div>

            <div class="modal-footer">

                <a class="btn btn-secondary" href="adminc.php">Go Back</a>

                <button type="submit" name="update" class="btn btn-success">Update</button>

            </div>

            </form>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        let imgInput = document.getElementById('imgInput');

        let previewImg = document.getElementById('previewImg');



        imgInput.onchange = evt => {

            const [file] = imgInput.files;

            if (file) {

                previewImg.src = URL.createObjectURL(file);

            }

        }

    </script>



</body>

</html>