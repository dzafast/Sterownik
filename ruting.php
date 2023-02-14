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
                    <div class="text-white-center"><?php echo $napis2 ?></div>
                </div>
                <div>
                    <div class="text-grey-center">
                        <!-- <?php echo $napis26 ?> -->
                    </div>
                    <hr>
                    <!-- NENU STATUS -->
                    <div class="status-menu">
                        <a href="ifconf.php"><?php echo $napis1 ?></a>
                    </div>
                    <div class="status-menu-l">
                        <a href="netstat.php"><?php echo $napis22 ?></a>
                    </div>
                    <div class="status-menu-r">
                        <a href="ruting.php"><?php echo $napis26 ?></a>
                    </div>
                    <!-- KONIEN MENU STATUS -->
                    <hr>
                    <div class="text-grey-center">
                        <?php echo $napis26; ?>
                    </div>
                    <hr>
                    <!-- NETSTAT -->
                    <div class="status">
                        <?php
                            echo '<pre>';   
                                $netstat = system('/sbin/route');
                            echo '</pre>';
                        ?> 
                    </div>
                </div>
            </div>
        <!-- KONIEC SEKCJI GŁOWNEJ -->
        </div>  
        <div id="footer">

        </div>      
    </body>
</html>