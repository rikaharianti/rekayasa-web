<?php
    session_start();

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $conn = new mysqli("localhost", "root", "", "bukubestseller");
    $status = $conn->query("select count(email) as hasil from user where email='".$email."' and password='".$password."'");

    $uservalid = $status->fetch_all(MYSQLI_ASSOC);

    if($uservalid[0]['hasil']){
        $_SESSION['email'] = $email;
        header('Location: profil.php');  
    } else {
        $_SESSION['loginfailed'] = true;
        header('Location: login.php');
    }

    session_write_close();
?>