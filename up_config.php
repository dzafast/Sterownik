<?php
    session_start();
    if(!isset($_SESSION['zalogowany'])){
        $_SESSION['komunikat'] = "Nie jesteś zalogowany!";
        include('form.php');
        exit();
    }
?>
<?php
    include "editobject.php";
?>
<?php
    include "words.php";
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/styles.css">
    <title>SERWIS</title>

    <body>
    <div class="container">
        <!-- NAZWA STANOWISKA, NrFiz, NrDysp -->    
            <?php include_once "header.php" ?>

        <!-- MENU BOCZNE -->
            <?php include "menu.php" ?>
        <!-- KONIEC MENU BOCZNE -->
            <!-- This's a space beetwen nav and content-one, no data please!!! -->
            <div class="content">
            </div>
    <!-- SEKCJA GŁÓWNA -->   
    <div class="content-one" name="General informations window">
        <div class="content-one-menu">
            <div class="text-white-center"><?php echo $napis19 ?></div>
        </div>
        <div>
            <div class="text-grey-center">
                <?php echo $napis17; ?>
            </div>
            <hr>
            <form enctype="multipart/form-data" action="upload_config.php" method="post">
                <div class="btn">
                    <input type="hidden" name="max_file_size" value="55500480">

                    <input type="file" name="plik1" size="30">

                    <input type="submit" name="wyslij" value="wyślij plik" >
                </div>
            </form>
                <div style="clear: both"></div>
            </div>
            <hr>
            <center>
                <div >
                    <a href="up_apply.php">Zastosuj</a>
                </div>
            </center>    
    </div>
    <!-- KONIEC SEKCJI GŁOWNEJ -->

        <div id="footer">

        </div>      
    </body>
</html>    

