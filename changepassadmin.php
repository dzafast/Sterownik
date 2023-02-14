<?php
    //Wczytanie pliku aby rozdzielić na uzytkownika i haslo.
    $log = fopen("../var/secret/passadmin.txt", "r");
            
    if($log){
        while(!feof($log)){
            $line = trim(fgets($log));
            $arr = explode(":", $line);
            $user = $arr[0];
            $pass = $arr[1];
        }   
    }
    // Zamknięcie pliku tekstowego z hasłami
    fclose($log);
            
        //sprawdzenie "oldpass" starego hasla z systemu z tym co wpisał użytkownik,
        if($_POST['oldpass'] == $pass){
            
            // "Aktualne hasło wpisałeś poprawnie";
            header('location:newpassadmin.php');

            // Ponowne wczytanie uzytkownika i hasła z pliku txt
            if(!empty($_POST['newpass'])){
                $newpass = $_POST['newpass'];
                $log = ("../var/secret/passadmin.txt");
                //Utworzenie tablicy z danymi user i nowe haslo
                $pass = array($user, $newpass);
                $newlogin = implode(":", $pass);

                $fp = fopen($log, "w");

                fwrite($fp, $newlogin);
                fclose($fp);

                header('location:oldpass.php');

            }else{
                header('location:newpassadmin.php');
            }
        }else{
            header('location:oldpass.php');
        }
?>