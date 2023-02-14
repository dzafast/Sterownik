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
            </script>
            <div class="content-one" name="General informations window">
                <div class="content-one-menu">
                    <div class="text-white-center"><?php echo $napis11 ?></div>
                </div>
                <div>
                <div class="text-grey-center">
                    <?php echo $napis12; ?>
                </div>
                <hr>
                <?php
                    $ipadress = "192.168.50.200";
                ?>    
                <form action="ethernet.php" method="POST" name="form2">
                    <div class="label-opis">

                        <div class="opis"><label>IP Address:</label></div></br>
                        <div class="opis"><label>Subnet Mask / Prefix:</label></div></br>
                        <div class="opis"><label>Default Gateway:</label></div></br>
                        <div class="opis"><label>DNS Server:</label></div></br>
                    </div>
                    <div class="label-pole">

                        <div class="wpis"><input type="text" name="ipadress" value="<?= $ipadress ?>"><span>  </span></div></br>
                        <div class="wpis"><input type="text" name="mask"></div></br>
                        <div class="wpis"><input type="text" name="geteway"></div></br>
                        <div class="wpis"><input type="text" name="dns"></div></br>
                    </div>
                    <div style="clear: both"></div>
                    <hr>
                    <div class="btn"><input type="submit" value="zapisz" disabled="disabled"></div>
                    <hr>
                </form> 
            </div>
        </div>
        <!-- KONIEC SEKCJI GŁOWNEJ -->
        <div id="footer">

        </div>      
    </body>
</html>