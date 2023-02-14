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
                    <div class="text-white-center"><?php echo $napis10 ?></div>
                </div>
                <div>
                    <div class="text-grey-center">
                        <?php echo $napis9; ?>
                    </div>
                    <hr>
                    <?php
                        $newfiz = file('/Komster/KONFIG/parametry_stanowiska/nr_sys');
                        $newdysp = file('/Komster/KONFIG/parametry_stanowiska/nr_dysp');
                        $newnazw = file('/Komster/KONFIG/parametry_stanowiska/nazwa');
                        foreach($newfiz as $nrfiz){
                            $nrfis;
                        }
                        foreach($newdysp as $nrdysp){
                            $nrdysp;
                        }
                        foreach($newnazw as $nazwa){
                            $nazwa;
                        }
                    ?>
                    <form action="newfiz.php" method="POST">
                        <div class="label-fiz1"><label>Nr Fizyczny:</label></div>
                        <div class="label-fiz2"><input type="text" name="newfiz" id="newfiz" value="<?= $nrfiz; ?>"></div>
                        <div class="label-fiz3"><input type="submit" value="zapisz"></div>
                        <div style="clear: both"></div>
                    </form> 
                    <hr>
                    <form action="newdysp.php" method="POST">
                        <div class="label-dysp1"><label>Nr Dyspozytorski:</label></div>
                        <div class="label-dysp2"><input type="text" name="newdysp" value="<?= $nrdysp ?>"></div>
                        <div class="label-dysp3"><input type="submit" value="zapisz"></div>
                        <div style="clear: both"></div>
                    </form>
                    <hr>
                    <form action="newnazw.php" method="POST">
                        <div class="label-name1"><label>Nazwa Stanowiska:</label></div>
                        <div class="label-name2"><input type="text" name="newnazw" value="<?= $nazwa ?>"></div>
                        <div class="label-name3"><input type="submit" value="zapisz"></div>
                    </form> 
                    <div style="clear: both"></div>
                    <hr>
                </div>
            </div>
        <!-- KONIEC SEKCJI GŁOWNEJ -->
        </div>  
        <div id="footer">

        </div>      
    </body>
</html>            