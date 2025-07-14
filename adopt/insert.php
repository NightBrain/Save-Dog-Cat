<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 



    session_start();

    require_once "config/db.php";



    if (isset($_POST['submit'])) {

        $firstname = $_POST['firstname'];

        $lastname = $_POST['lastname'];

        $position = '⚠️ รอการรับเลี้ยง';

        $sex = $_POST['sex'];

        $img = $_FILES['img'];



        $allow = array('jpg', 'jpeg', 'png');

        $extension = explode(".", $img['name']);

        $fileActExt = strtolower(end($extension));

        $fileNew = rand() . "." . $fileActExt;

        $filePath = "uploads/".$fileNew;



        if (in_array($fileActExt, $allow)) {

            if ($img['size'] > 0 && $img['error'] == 0) {

                move_uploaded_file($img['tmp_name'], $filePath);

            }

        }

        $sql = $conn->prepare("INSERT INTO userss(firstname, lastname, position, sex, img) VALUES(:firstname, :lastname, :position, :sex, :img)");

        $sql->bindParam(":firstname", $firstname);

        $sql->bindParam(":lastname", $lastname);

        $sql->bindParam(":position", $position);

        $sql->bindParam(":sex", $sex);

        $sql->bindParam(":img", $fileNew);

        $sql->execute();



        if ($sql) {

            $_SESSION['success'] = "เพิ่มข้อมูลสำเร็จ";

            echo "<script>

                $(document).ready(function() {

                    Swal.fire({

                        title: 'success',

                        text: 'เพิ่มข้อมูล สุนัข สำเร็จ!',

                        icon: 'success',

                        timer: 3000,

                        showConfirmButton: false

                    });

                })

            </script>";

            header("refresh:2; url=admin.php");

        } else {

            $_SESSION['error'] = "มีบางอย่างผิดปกติ เพิ่มข้อมูลไม่สำเร็จ";

        }

    }

?>

