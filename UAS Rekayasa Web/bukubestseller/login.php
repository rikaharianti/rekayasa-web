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
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Silahkan login</h1>
    </header>
    
    <form method="post" action="auth.php" class="form">
        <?php
            if(isset($_SESSION['loginfailed']))
            {
                if($_SESSION['loginfailed']){
                    echo '
                    <div class="alert-failed">
                        Login gagal, username atau password salah
                    </div>
                    ';
                    unset($_SESSION['loginfailed']);
                }
            }
        ?>

        <?php
            if(isset($_SESSION['registersuccess'])){
                if($_SESSION['registersuccess']){
                    echo '
                    <div class="alert-info">
                        Silahkan login
                    </div>
                    ';
                    unset($_SESSION['registersuccess']);
                }
            }
        ?>

        <div class="form__group">
            <input type="email" placeholder="Email" name="email" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" name="password" class="form__input" />
        </div>
        
        <button class="btn" type="submit">Login</button>

        <div class="info-bottom">
            Tidak punya akun? Silahkan <a href="register.php">register</a>
        </div>
    </form>
</div>
</body>
<script src="js/main.js"></script>
</html>