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
        </div>
        <div class="content-one-menu">
            <div class="text-white-center"><a href="servis.php" title="Powrót do strony serwisu"><?php echo $napis2 ?></a></div>
        </div>

    <!-- SEKCJA GŁÓWNA -->

                    
                    <?php

                    // Show all information, defaults to INFO_ALL
                    // phpinfo();

                    // Show just the module information.
                    // phpinfo(8) yields identical results.
                    phpinfo(INFO_MODULES);


                    ?>


    <!-- KONIEC SEKCJI GŁOWNEJ -->
            </div>  
      
    </body>
</html>