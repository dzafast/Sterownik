<?php
    if(isset($_POST['newnazw']) && $_POST['newnazw'] != ""){
        $newNazwa = substr($_POST['newnazw'], 0, 100);
        $newNazwa = trim($newNazwa);
        $wyrazenie = ('/[a-zA-Z_]/');
        if(preg_match($wyrazenie, $newNazwa)){
            file_put_contents('/Komster/KONFIG/parametry_stanowiska/nazwa', $newNazwa );
            header('location:stanowisko.php');
        }else{
            header('location:stanowisko.php');
        }
    }else{
        header('location:stanowisko.php');
    }
?>