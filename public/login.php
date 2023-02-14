<?php
function checkPass($user, $pass){
    if(!$fd = fopen("../var/secret/pass.txt", "r")) return 1;
    $result = 2;
    while (!feof($fd)){
        $line = trim(fgets($fd));
        $arr = explode(":", $line);
        if(count($arr) < 2) continue;
        if($arr[0] != $user) continue;
        if($arr[1] == $pass){
            $result = 0;
        }
        break;
    }
    fclose($fd);
    return $result;
}

session_start();
if(isset($_SESSION['zalogowany'])){
    header("Location: servis.php");
}
else if(!isset($_POST["haslo"]) || !isset($_POST["user"])){
    $_SESSION['komunikat'] = "Wprowadź nazwę i hasło użytkownika:";
    include('form.php');
}
else{
    $val = checkPass($_POST["user"], $_POST["haslo"]);
    if($val == 0){
        $_SESSION['zalogowany'] = $_POST["user"];
        header("Location: servis.php");
    }
    else if($val == 1){
        $_SESSION['komunikat'] = "Błąd servera. Zalogowanie nie było możliwe.";
        include('form.php');
    }
    else if($val == 2){
        $_SESSION['komunikat'] = "Nieprawidłowa nazwa lub hasło uzytkownika.";
        include('form.php');
    }
    else{
        $_SESSION['komunikat'] = "Błąd servera. Zalogowanie nie było możliwe.";
        include('form.php');
    }
}
?>