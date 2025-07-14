<?php 



    session_start();

    require_once 'config/db.php';

    $secret = "6Lfjea8kAAAAAJbrFTcgdjJT848hbxQlYBxCm2cl";

    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
        $verifyResponse = file_get_contents('https://google.com/recaptcha/api/siteverify?secret=' .$secret.'&response='.$captcha);
        $responseData = json_decode($verifyResponse);

        if (!$captcha) {
            $_SESSION['error'] = "คุณไม่ได้ป้อน reCAPTCHA อย่างถูกต้อง!";
            header("location: index.php");
        }


    if (isset($_POST['signin']) && $responseData->success) {

        $email = $_POST['email'];

        $password = $_POST['password'];

        

        if (empty($email)) {

            $_SESSION['error'] = 'กรุณากรอกอีเมล';

            header("location: index.php");

        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';

            header("location: index.php");

        } else if (empty($password)) {

            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';

            header("location: index.php");

        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {

            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';

            header("location: index.php");

        } else {

            try {

                $check_data = $conn->prepare("SELECT * FROM users WHERE email = :email");

                $check_data->bindParam(":email", $email);

                $check_data->execute();

                $row = $check_data->fetch(PDO::FETCH_ASSOC);



                if ($check_data->rowCount() > 0) {



                    if ($email == $row['email']) {

                        if (password_verify($password, $row['password'])) {

                            if ($row['urole'] == 'admin') {

                                $_SESSION['admin_login'] = $row['id'];

                                header("location: admin.php");

                            } else {

                                $_SESSION['user_login'] = $row['id'];

                                header("location: user.php");

                            }

                        } else {

                            $_SESSION['error'] = 'รหัสผ่านผิด';

                            header("location: index.php");

                        }

                    } else {

                        $_SESSION['error'] = 'อีเมลผิด';

                        header("location: index.php");

                    }

                } else {

                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";

                    header("location: index.php");

                }



            } catch(PDOException $e) {

                echo $e->getMessage();

            }

        }

    }



    }

?>