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
                    <div class="text-white-center"><?php echo $napis30 ?></div>
                </div>
                <div>
                    <div class="text-grey-center">
                        <!-- <?php echo $napis1; ?> -->
                    </div>
                    <hr>
                    <div class="status">
                        <!-- <?php

                            echo '<pre>';   
                                $status = system('/sbin/ifconfig ppp0', $retval);
                            echo '</pre>';

                        ?>  -->
                    </div>    
                </div>
                <hr>
                <div>
                    <div class="text-grey-center">
                        <?php echo $napis8; ?>
                    </div>
                    <hr>
                    <div class="status-l">
                        <?php
                            echo '<pre>';
                                $sila = system('sudo /Komster/skrypty/mod_param');
                            echo '</pre>'
                        ?>
                    </div>
                    <hr>
                </div>    
            </div>

        </div>  
        <div id="footer">

        </div>      
    </body>

</html>