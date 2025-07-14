<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

    session_start();
    require_once "config/db.php";

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $statuss = 'อนุมัติการรับเลี้ยง ✅';

        $sql = $conn->prepare("UPDATE adopt SET statuss = :statuss WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":statuss", $statuss);
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "อนุมัติการรับเลี้ยง ✅";
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'success',
                        text: 'อนุมัติการรับเลี้ยงเรียบร้อย ✅',
                        icon: 'success',
                        timer: 3000,
                        showConfirmButton: false
                    });
                })
            </script>";
            header("refresh:2; url=user_adopt.php");
        } else {
            $_SESSION['error'] = "มีบางอย่างผิดปกติ";
            header("location: user_adopt.php");
        }
    }

?>
