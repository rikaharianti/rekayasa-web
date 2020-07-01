<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("location: login.php");
    } else {
        $conn = new mysqli("localhost", "root", "", "bukubestseller");
        $sql = $conn->query("select api_key from user where email='".$_SESSION['email']."'");

        $user = $sql->fetch_all(MYSQLI_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>

<pre>
Login sukses <br>
Email: <?php echo $_SESSION['email'];?> <br>
API key: <?php echo $user[0]['api_key'];?>
<br><br>
<a href="logout.php">Log out</a>
</pre>
</body>
</html>