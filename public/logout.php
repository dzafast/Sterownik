<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
    $komunikat = "Nie jesteś zalogowany!";
}
else{
    unset($_SESSION['zalogowany']);
    $komunikat = "wylogowanie prawidłowe!";
    
}
session_destroy();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Bitter&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <title>WYLOGOWANIA</title>
    </head>
    <body>
        <p><?php echo $komunikat ?></p>
        <br>
        <p><a href="login.php">Zaloguj się ponownie</a></p>
    </body>
    
</html>