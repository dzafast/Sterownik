
<?php
    $uploaddir = './upload/';
    if($_FILES['plik1']['error'] == UPLOAD_ERR_OK){
        $new_name = $uploaddir.$_FILES['plik1']['name'];
        $temp_name = $_FILES['plik1']['tmp_name'];
        if(move_uploaded_file($temp_name, $new_name)){
            echo "Plik został załadowany.<br />";

            echo "$new_name";
        }else{
            echo " Nie udało się załadować pliku";
            
        }
    }else{
        echo "Wystąpił błąd: ";
        switch($_FILES['plik1']['error']){
            case UPLOAD_ERR_INI_SIZE :
            case UPLOAD_ERR_FORM_SIZE :
                echo "Przekroczony maksymalny rozmiar pliku!";
                break;
            case UPLOAD_ERR_PARTIAL :
                echo "Odebrano tylko część pliku!";
                break;
            case UPLOAD_ERR_NO_FILE :
                echo "Plik nie został pobrany!" ;
                break;   
            case UPLOAD_ERR_NO_TMP_DIR :
                echo "Brak dostepu do katalogu tymczasowego!";
                break;
            case UPLOAD_ERR_CANT_WRITE :
                echo "Nie udało się zapisać pliku na dysk serwera!";
                break;
            default:
                echo "Nie znany typ błędu";
        }
    }
?>
