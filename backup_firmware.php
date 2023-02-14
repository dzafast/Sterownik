<?php
    session_start();
    if(!isset($_SESSION['zalogowany']) || ($_SESSION['zalogowany'] !== 'admin')){
        $_SESSION['komunikat'] = "Login SERWIS nie praw dostepu do FIRMWARE!";
        include('form_admin.php');
        session_destroy();
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
                <div class="text-white-center"><?php echo $napis29 ?></div>
            </div>
            <div>
                <div class="text-grey-center">
                    <?php echo $napis25; ?>
                </div>
                <hr>
                <div class="firmware-box">
                    <?php
                    $filesPath = "/arch/download/firmware/";
                    function printList($path)
                    {
                        $fd = opendir($path);
                        if(!$fd) return false;
                        while (($file = readdir($fd)) !== false){
                            if(is_dir($path.$file)) continue;
                            echo "<a href=\"./download.php?name=";
                            echo "$file\">$file</a><br />";
                        }
                        closedir($fd);
                    }
                    printList($filesPath);
                    ?>
                </div>
                <div style="clear: both"></div>
                <hr>
        </div>
        <!-- KONIEC SEKCJI GŁOWNEJ -->

        <div id="footer">

        </div>      
    </body>
</html>    

