<?php 



session_start();

include_once 'config/dbConfig.php';



// File upload path

$targetDir = "uploads/";

$secret = "6Lfjea8kAAAAAJbrFTcgdjJT848hbxQlYBxCm2cl";

    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
        $verifyResponse = file_get_contents('https://google.com/recaptcha/api/siteverify?secret=' .$secret.'&response='.$captcha);
        $responseData = json_decode($verifyResponse);

        if (!$captcha) {
            $_SESSION['error'] = "คุณไม่ได้ป้อน reCAPTCHA อย่างถูกต้อง!";
            header("location: Donate.php");
        }


if (isset($_POST['submit']) && $responseData->success) {

    if (!empty($_FILES["file"]["name"])) {

        $fileName = basename($_FILES["file"]["name"]);

        $targetFilePath = $targetDir . $fileName;

        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);



        // Allow certain file formats

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

        if (in_array($fileType, $allowTypes)) {

            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {

                $insert = $db->query("INSERT INTO images(file_name, uploaded_on) VALUES ('".$fileName."', NOW())");

                if ($insert) {

                    $_SESSION['statusMsg'] = "The file <b>" . $fileName . "</b> has been uploaded successfully.";

                    header("location: Donate.php");

                } else {

                    $_SESSION['statusMsg'] = "File upload failed, please try again.";

                    header("location: Donate.php");

                }

            } else {

                $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file.";

                header("location: Donate.php");

            }

        } else {

            $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";

            header("location: Donate.php");

        }

    } else {

        $_SESSION['statusMsg'] = "Please select a file to upload.";

        header("location: Donate.php");

    }

}

    }

?>