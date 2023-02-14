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
    UPLOAD
    ID1;
    $napis2 = <<< 'ID2'
    DOWNLOAD
    ID2;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Bitter&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <title>SERWIS</title>
    </head>
    <header>
        <nav id="menu">
            <a href="savenote.php">Notes</a>
            <a href="logout.php"><span>Wyloguj</span></a>
            <span style="color: red;">Zalogowany : <?php echo $_SESSION['zalogowany'] ?></span>
        </nav>
    </header>
    <body>
        <div class="container">
                <div class="pasek-lewy">

                </div>
                <div class="ramka-download">
                    <?php
                        include 'send.php';
                    ?>
                </div>
                
                <div class="ramka-upload">
                    <?php
                        include 'list.php';
                    ?>
                </div> 

        </div>        
    </body>
        <div style="clear: both;">
            <footer class="index-footer" > 
                <a href="https://www.komster.com/">  www.komster.com</a>
            </footer>
        </div>
</html>