
<?php
    $uploaddir = '/arch/upload/';
    if($_FILES['plik1']['error'] == UPLOAD_ERR_OK){
        $new_name = $uploaddir.$_FILES['plik1']['name'];
        $temp_name = $_FILES['plik1']['tmp_name'];
        if(move_uploaded_file($temp_name, $new_name)){
            header('location:fileok.php');
            // echo "Plik został załadowany.<br />";
            header('servis.php');
            echo "$new_name";
        }else{
            header('location:nodata.php');
            // echo " Nie udało się załadować pliku";
        }
    }else{
        // echo "Wystąpił błąd: ";
        switch($_FILES['plik1']['error']){
            case UPLOAD_ERR_INI_SIZE :
            case UPLOAD_ERR_FORM_SIZE :
                header('location:toobig.php');
                // echo "Przekroczony maksymalny rozmiar pliku!";
                break;
            case UPLOAD_ERR_PARTIAL :
                header('location:errfile.php');
                // echo "Odebrano tylko część pliku!";
                break;
            case UPLOAD_ERR_NO_FILE :
                header('location:nodata.php');
                // echo "Plik nie został pobrany!" ;
                break;   
            case UPLOAD_ERR_NO_TMP_DIR :
                header('location:noacces.php');
                // echo "Brak dostepu do katalogu tymczasowego!";
                break;
            case UPLOAD_ERR_CANT_WRITE :
                header('location:nosave.php');
                // echo "Nie udało się zapisać pliku na dysk serwera!";
                break;
            default:
                header('location:unkerr.php');
                echo "Nie znany typ błędu";
        }
    }
?>
