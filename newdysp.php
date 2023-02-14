<?php
    if(isset($_POST['newdysp']) && $_POST['newdysp'] != ""){
        $nrDysp = substr($_POST['newdysp'], 0, 15);
        $nrDysp = trim($nrDysp);
        $wyrazenie = ('/(\d+)/');
        if(preg_match($wyrazenie, $nrDysp)){
            file_put_contents('/Komster/KONFIG/parametry_stanowiska/nr_dysp', $nrDysp );
            header('location:stanowisko.php');
        }else{
            header('location:stanowisko.php');
        }
    }else{
        header('location:stanowisko.php');
    }
?>