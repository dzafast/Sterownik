<?php
    if(isset($_POST['newfiz']) && $_POST['newfiz'] != ""){
        $nrFiz = substr($_POST['newfiz'], 0, 15);
        $nrFiz = trim($nrFiz);
        $wyrazenie = ('/(\d+)/');
        if(preg_match($wyrazenie, $nrFiz)){
            file_put_contents('/Komster/KONFIG/parametry_stanowiska/nr_sys', $nrFiz );
            header('location:stanowisko.php');
        }else{
            header('location:stanowisko.php');
        }
    }else{
        header('location:stanowisko.php');
    }
?>