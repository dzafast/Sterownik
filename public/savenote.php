<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
    $_SESSION['komunikat'] = "Nie jesteś zalogowany!";
    include('form.php');
    exit();
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/styles.css">
        <link href='https://fonts.googleapis.com/css?family=Bitter&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <title>NOTES</title>
    </head>
    <header>
        <nav id="menu">
            <a href="send.php">Upload</a>
            <a href="speed.php">Speed</a>
            <a href="list.php">Download</a>
            <a style="background-color: #B2F511;" href="savenote.php">Notes</a>
            <a href="logout.php"><span>Wyloguj</span></a>
            <span style="color: red;">Zalogowany : <?php echo $_SESSION['zalogowany'] ?></span>
        </nav>
    </header>
        <table>
            <colgroup>
                <col id="form" />
                <col id="note" />
            </colgroup>
            <thead class="title">
                <tr>
                    <th>Zapisane notatki</th>
                    <th>Notatnik (max 255 znaków)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="notatka">
                    <td class="ramka">
                        <?php
                            $str = "";
                            if(file_exists("./note.txt")){
                                $str = file_get_contents('./note.txt');
                                $str = strip_tags($str);
                                $str = nl2br($str);
                            } 
                            if($str != ""){
                                echo $str;
                            }else{
                                echo "<p> Brak opinii. Możesz dodać pierwszą.</body></p>";
                            }
                        ?>
                    </td>

                    <td class="ramka">
                        <form action="note.php" method="POST">

                            <textarea rows="30" cols="60" name="note"></textarea>
                            <div class="center">
                                <input type="submit" value="zapisz">
                            </div>
                        </form> 
                    </td>
                </tr>
            </tbody>
        </table>   
        <p class="return">
            <a href="servis.php">Powrót</a>
        </p>
    <footer class="index-footer"> 
        <a href="https://www.komster.com/">  www.komster.com</a>
    </footer>
</html>