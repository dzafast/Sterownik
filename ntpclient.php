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
                <div class="text-white-center"><?php echo $napis14 ?></div>
            </div>

            <div>
                <div class="text-grey-center">
                <?php echo strftime("Data: %d-%m-%y") ?><?php echo " - "?><?php echo strftime("Czas: %H:%M:%S") ?>
                </div>
                <hr>
                <?php
                    $ip = file('/Komster/KONFIG/czas_z_serwera_ntp/ip'); //server
                    // $ip = file('ip'); //local
                    $ip0 = $ip[0];
                    $ip1 = $ip[1];
                    $ip2 = $ip[2];
                    $ip3 = $ip[3];
                ?>
                <form action="newip.php" method="POST" name="form2">
                    <div class="label-opis">

                        <div class="opis"><label>IP 1:</label></div></br>
                        <div class="opis"><label>IP 2:</label></div></br>
                        <div class="opis"><label>IP 3:</label></div></br>
                        <div class="opis"><label>IP 4:</label></div></br>
                    </div>
                    <div class="label-pole">
                        <div class="wpis"><input type="text" name="ip1" maxlength="15" value="<?= $ip0; ?>"></div></br>
                        <div class="wpis"><input type="text" name="ip2" maxlength="15" value="<?= $ip1; ?>"></div></br>
                        <div class="wpis"><input type="text" name="ip3" maxlength="15" value="<?= $ip2; ?>"></div></br>
                        <div class="wpis"><input type="text" name="ip4" maxlength="15" value="<?= $ip3; ?>"></div></br>
                    </div>
                        <?php
                            // echo '<div>';
                            //     $plik = file('/Komster/KONFIG/czas_z_serwera_ntp/ip');
                            //     // $plik = file('ip');
                                    
                            //     echo '<ul>';
                            //     for($i = 0, $x = count($plik); $i < $x; $i++)
                            //     {
                            //         echo '<li>'.trim($plik[$i]).'</li>';	
                            //         echo '&nbsp';
                            //     }
                            //     echo '</ul>';   
                            // echo '</div>';    
                        ?>
                    <div style="clear: both"></div>
                    <hr>
                    <div class="btn"><input type="submit" value="zapisz"></div>
                    <hr>
                </form> 
            </div>
        </div>
        <!-- KONIEC SEKCJI GŁOWNEJ -->
 
        <div id="footer">

        </div>      
    </body>
</html>   