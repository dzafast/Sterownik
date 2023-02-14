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
                <div class="text-white-center"><?php echo $napis34 ?></div>
            </div>
            <!-- Zmiana hasla serwis -->
            <div>
                <div class="text-grey-center">
                <?php echo strftime("Data: %d-%m-%y") ?><?php echo " - "?><?php echo strftime("Czas: %H:%M:%S") ?>
                </div>
                <hr>
                <div class="text-grey-center">
                    SERWIS
                </div>
                <div class="text-grey-center">
                    <!-- Data modyfikacji pliku -->
                <?php
                    //Definiujemy nazwę pliku, wraz z jej ścieżką  
                    $name = "../var/secret/pass.txt";  
                    function getServisTime($file) {
                        $time = filemtime($file);
                        $date = date("G:i:s d.m.Y", $time);
                        echo "Data ostatniej modyfikacji pliku to ". $date;
                    }
                    //Kod wyświetlający zawartość funkcji
                    getServisTime($name);
                ?>   
                </div>
                <div style="both">
                <?php
                    if(isset($_POST))
                        include('serwispass.php');
                ?>
                </div>
                <div style="clear: both"></div>
                <hr>
            </div>
                <!-- Zmiana hasla admin -->
            <div>
                <hr>
                <div class="text-grey-center">
                    ADMINISTRATOR
                </div>
                <div class="text-grey-center">
                    <!-- Data modyfikacji pliku -->
                <?php
                    //Definiujemy nazwę pliku, wraz z jej ścieżką  
                    $name = "../var/secret/passadmin.txt";  
                    function getAdminTime($file) {
                        $time = filemtime($file);
                        $date = date("G:i:s d.m.Y", $time);
                        echo "Data ostatniej modyfikacji pliku to ". $date;
                    }
                    //Kod wyświetlający zawartość funkcji
                    getAdminTime($name);
                ?>   
                </div>
                <div style="both">
                <?php
                    include('adminpass.php');
                ?>
                </div>
                <div style="clear: both"></div>
                <hr>
            </div>
        </div>
        <!-- KONIEC SEKCJI GŁOWNEJ -->
 
        <div id="footer">

        </div>      
    </body>
</html>   