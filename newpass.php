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

            <div>
                <div class="text-grey-center">
                <?php echo strftime("Data: %d-%m-%y") ?><?php echo " - "?><?php echo strftime("Czas: %H:%M:%S") ?>
                </div>
                <hr>
                <div class="text-grey-center">
                    SERWIS
                </div>
                <div class="text-grey-center">
                <?php
                    echo "Aktualne hasło wpisałeś poprawnie!";
                ?>

                <?php
                    //Wczytanie pliku aby rozdzielić na uzytkownika i haslo.
                    $log = fopen("../var/secret/pass.txt", "r");
                            
                    if($log){
                        while(!feof($log)){
                            $line = trim(fgets($log));
                            $arr = explode(":", $line);
                            $user = $arr[0];
                            $pass = $arr[1];
                        }   
                    }
                    // Zamknięcie pliku tekstowego z hasłami
                    fclose($log);
                ?> 
                </div>    
                </br>
                <div class="label-opis">
    
                </div>
                <div class="label-pole">
                    <form action="changepass.php" method="post">
                            Aktualne hasło:</br>
                        <input type="password" name="oldpass" value="<?= $pass; ?>" /></br>
                            Nowe hasło:</br>
                        <input type="password" name= "newpass" value="">
                        <input name="submit" type="submit" value="Zmień">
                    </form>
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