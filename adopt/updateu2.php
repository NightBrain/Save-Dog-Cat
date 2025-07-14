<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

    session_start();
    require_once "config/db.php";

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $urole = 'user';

        $sql = $conn->prepare("UPDATE users SET urole = :urole WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":urole", $urole);
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "เปลี่ยนสถานะแล้ว";
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'success',
                        text: 'เปลี่ยนสถานะเป็นยูเซอร์แล้ว!',
                        icon: 'success',
                        timer: 3000,
                        showConfirmButton: false
                    });
                })
            </script>";
            header("refresh:2; url=urole.php");
        } else {
            $_SESSION['error'] = "มีบางอย่างผิดปกติ";
            header("location: urole.php");
        }
    }

?>
