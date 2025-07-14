<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php 

    error_reporting(0);
    ini_set('display_errors', 0);

    session_start();

    require_once "config/db.php";



    if (isset($_POST['submitt'])) {

        $prefix = $_POST['prefix'];

        $firstname = $_POST['firstname'];

        $lastname = $_POST['lastname'];

        $tle = $_POST['tle'];

        $email = $_POST['email'];

        $id_adopt = $_POST['id_adopt'];

        $addresss = $_POST['addresss'];

        $reason = $_POST['reason'];

        $img = $_FILES['imgg'];

        $statuss = 'รอการอนุมัติ ⚠️';



        $allow = array('jpg', 'jpeg', 'png');

        $extension = explode(".", $img['name']);

        $fileActExt = strtolower(end($extension));

        $fileNew = rand() . "." . $fileActExt;

        $filePath = "upload/".$fileNew;



        if (in_array($fileActExt, $allow)) {

            if ($img['size'] > 0 && $img['error'] == 0) {

                move_uploaded_file($img['tmp_name'], $filePath);

            }

        }



        $sql = $conn->prepare("INSERT INTO adopt(prefix, firstname, lastname, tle, email, id_adopt, statuss, reason, imgg, addresss) VALUES(:prefix, :firstname, :lastname, :tle, :email, :id_adopt, :statuss, :reason, :imgg, :addresss)");

        $sql->bindParam(":prefix", $prefix);

        $sql->bindParam(":firstname", $firstname);

        $sql->bindParam(":lastname", $lastname);

        $sql->bindParam(":tle", $tle);

        $sql->bindParam(":email", $email);

        $sql->bindParam(":id_adopt", $id_adopt);

        $sql->bindParam(":addresss", $addresss);

        $sql->bindParam(":statuss", $statuss);

        $sql->bindParam(":reason", $reason);
        
        $sql->bindParam(":imgg", $fileNew);

        $sql->execute();



        if ($sql) {

            $_SESSION['success'] = "คำขอรับเลี้ยงสำเร็จ";

            header("refresh:2; url=History_Adopt.php");

            echo "<script>

                $(document).ready(function() {

                    Swal.fire({

                        title: 'success',

                        text: 'ส่งคำขอรับเลี้ยงเรียบร้อย!',

                        icon: 'success',

                        timer: 3000,

                        showConfirmButton: false

                    });

                })

            </script>";

            

        } else {

            $_SESSION['error'] = "มีบางอย่างผิดปกติ คำขอรับเลี้ยงไม่สำเร็จ";

        }

    }

?>

