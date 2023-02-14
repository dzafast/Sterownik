<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
    $_SESSION['komunikat'] = "Nie jesteś zalogowany!";
    include('form.php');
    exit();
}
?>
<?php
    $napis1 = <<< 'ID1'
    Aktualizacja sterownika
    ID1;
    $napis2 = <<< 'ID2'
    Predkosc modemu sterownika w bodach
    ID2;
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
    <table class="return">  
        <caption>
            <p>Wybierz predkość transmisji danych!</p>
        </caption>
        <colgroup>
            <col id="bod">
        </colgroup>       
        <tr id="TRESC1">
          <td>
            <h2>
              <?php
                echo $napis2;
              ?>
            </h2>
            </td>
            <td>
              <h3><a href="./test1.php">800 bd</a></h3>
              <h3><a href="./test2.php">1200 bd</a></h3>
          </td>
        </tr>
    </table>
    </body>
    <p class="return">
            <a href="servis.php">Powrót</a>
        </p>
    <footer class="index-footer"> 
        <a href="https://www.komster.com/">  www.komster.com</a>
    </footer>
</html>