<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Logowanie</title>
    </head>
    <body>
        <div class="login-box">
            <!-- <div class="avatar">
                <img src="./img/avatar.png" alt="avatar" width="50" class="figure"/>
            </div> -->
            <div class="php">
                <?php
                    if(isset($_SESSION['komunikat']))
                    echo $_SESSION['komunikat'];
                    else
                    echo "Wprowadź nazwę i hasło użytkownika:";
                ?>
            </div>
            <form action = "login.php" method = "POST">

                <div class="form--input-box">
                    <label for="user" class="label">Użytkownik</label>
                    <input type="text" name="user" id="login">
                </div>
                <div class="form--input-box">
                    <label for="haslo" class="label">Hasło</label>
                    <input type="text" name="haslo" id="password">
                </div>
                <div>
                    <input type="submit" value="Wejdź">
                </div>
            </form>
            <br>
            <div class="divreturn">
                <a href="index.php">Powrót</a>
            </div>
        </div>  
    </body>
</html>