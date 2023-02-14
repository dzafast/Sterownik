<?php
    session_start();
    if(!isset($_SESSION['zalogowany'])){
        $komunikat = "Nie jesteś zalogowany!";
    }
    else{
        unset($_SESSION['zalogowany']);
        $komunikat = "wylogowanie prawidłowe!";
        
    }
    session_destroy();
?>
<?php
    require "editobject.php";
?>
<?php
    require "words.php";
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/styles.css">
    <title>STATUS</title>

    <body>
    <div class="container">
        <!-- NAZWA STANOWISKA, NrFiz, NrDysp -->    
            <?php include_once "header.php" ?>
 
            <div class="nav">
                <!-- <div class="nav-menu">
                    <div class="text-white">Status</div>
                </div>
                <div class="text-blue">

                </div>
                <div class="text-blue">

                </div> -->
                <div class="nav-menu">
                    <div class="text-white"><?php echo $napis6 ?></div>
                </div>
                <div class="text-blue">
                    <a href="form.php">SERWIS</a>
                </div>
                <div class="text-blue">
                    <a href="form_admin.php">ADMIN</a>
                </div>
                
            </div>
  
            <!-- This's a space beetwen nav and content-one, no data please!!! -->
            <div class="content">
            </div>

            <div class="content-one" name="General informations window">
                <div class="content-one-menu">
                    <div class="text-white-center"><?php echo $napis2 ?></div>
                </div>
                
                  
            </div>

        </div>  
        <div id="footer">

        </div>      
    </body>

</html>