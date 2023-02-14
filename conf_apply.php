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
                <div class="text-white-center"><?php echo $napis16 ?></div>
            </div>
            <div>
                <div class="text-grey-center">
                    <?php echo $napis17; ?>
                </div>
                <hr>
                <form enctype="multipart/form-data" action="upload.php" method="post">
                    <div class="btn">
                        <input type="hidden" name="max_file_size" value="500480">

                        <input type="file" name="plik1" size="30">

                        <input type="submit" name="wyslij" value="wyślij plik">
                    </div>
                </form>
                    <div style="clear: both"></div>
                </div>
                <hr>
                <!-- APPLY -->
                <div class="status">
                    <?php
                        echo '<pre>';   
                            $status = exec('sudo sh /wgrajfirmware.sh');
                        echo '</pre>';
                    ?> 
                </div>  
                <center><div><span>Operacja zakończona</span></div></center>
            </div>
            <!-- KONIEC SEKCJI GŁOWNEJ -->
        </div>
        <div id="footer">

        </div>      
    </body>
</html>    

