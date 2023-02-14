<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Logowanie</title>
    </head>
    <body>
        <div class="content-box">
            <div class="content-one-menu">
                <div class="text-white-center">
                <?php
                    if(isset($_SESSION['komunikat']))
                    echo $_SESSION['komunikat'];
                    else
                    echo "Wprowadź nazwę i hasło użytkownika:";
                ?>
                </div>
            </div>
            <div class="napis">Zaloguj się jako administrator</div>
            <div class="form-box">
                <form action = "login_admin.php" method="POST">
                    <div class="form-input-box">
                        <label for="user" >Administrator</label><br>
                        <input type="text" name="user" id="login">
                    </div>
                    </br>
                    <div class="form-input-box">
                        <label for="haslo" >Hasło</label><br>
                        <input type="password" name="haslo" id="password">
                    </div>
                    </br> 
                    <div>
                        <input type="submit" value="Zaloguj">
                    </div>      
                </form>
            </div>

            <div>
                </br></br></br>
                <a href="index.php">Powrót</a> 
            </div>
        </div>          
    </body>
</html>