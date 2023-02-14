<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
    $_SESSION['komunikat'] = "Nie jesteś zalogowany!";
    include('form.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Bitter&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <title>NOTES</title>
    </head>
    <header>
        <nav id="menu">
            <a href="send.php">Upload</a>
            <a style="background-color: #B2F511;" href="speed.php">Speed</a>
            <a href="list.php">Download</a>
            <a href="savenote.php">Notes</a>
            <a href="logout.php"><span>Wyloguj</span></a>
            <span style="color: red;">Zalogowany : <?php echo $_SESSION['zalogowany'] ?></span>
        </nav>
    </header>
    <body>
      <p>
        <?php
            exec('c:\WINDOWS\system32\cmd.exe /c START  c:\xampp\htdocs\sterownik\public\d.bat');
            echo "Plik został usunięty"
        ?>
      </p>
    </body>
    <p class="return">
        <a href="speed.php">Powrót</a>
    </p>
    <footer class="index-footer"> 
        <a href="https://www.komster.com/">  www.komster.com</a>
    </footer>