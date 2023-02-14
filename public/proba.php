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
    <link rel="stylesheet" href="./css/proba.css">
    <title>SERWIS</title>

    <body>
        <div class="container">
            <div class="logo">
            </div>
            <div class="menu nav-text">

                        <a href="speed.php">Speed</a>

                        <a href="savenote.php">Notes</a>

                        <a href="logout.php"><span>Wyloguj</span></a>

            
            
            <a href="logout.php"><span>Wyloguj</span></a>


            </div>
            <div class="nav">
            </div>
            <div class="content-one">
                <?php
                    include 'send.php';
                ?>
            </div>
            <div class="content-two">
                <?php
                    include 'list.php';
                ?>
            </div>
            <div class="footer">
            </div>

        </div>        
    </body>

</html>