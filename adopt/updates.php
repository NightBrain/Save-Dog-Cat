<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

    session_start();
    require_once "config/db.php";

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $position = 'รับเลี้ยงแล้ว ✅';

        $sql = $conn->prepare("UPDATE userss SET position = :position WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":position", $position);
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "รับเลี้ยงแล้ว ✅";
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'success',
                        text: 'รับเลี้ยงแล้ว ✅',
                        icon: 'success',
                        timer: 3000,
                        showConfirmButton: false
                    });
                })
            </script>";
            header("refresh:2; url=admin.php");
        } else {
            $_SESSION['error'] = "มีบางอย่างผิดปกติ";
            header("location: admin.php");
        }
    }

?>
