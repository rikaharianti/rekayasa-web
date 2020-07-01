<?php
    session_start();

    if(isset($_SESSION['email'])){
        header("location: profil.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Silahkan register</h1>
    </header>
    
    <form method="post" action="register_auth.php" class="form">
        <?php
            if(isset($_SESSION['registerfailed']))
            {
                if($_SESSION['registerfailed']){
                    echo '
                    <div class="alert-failed">
                        Register gagal, silahkan coba lagi.
                    </div>
                    ';
                }
            }
        ?>

        <div class="form__group">
            <input type="text" placeholder="Nama depan" name="nama_depan" class="form__input" required/>
        </div>

        <div class="form__group">
            <input type="text" placeholder="Nama belakang" name="nama_belakang" class="form__input" required/>
        </div>

        <div class="form__group">
            <input type="email" placeholder="Email" name="email" class="form__input" required/>
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" name="password" class="form__input" required/>
        </div>
        
        <button class="btn" type="submit">Register</button>

        <div class="info-bottom">
            Sudah punya akun? Silahkan <a href="login.php">login</a>
        </div>
    </form>
</div>
</body>
<script src="js/main.js"></script>
</html>