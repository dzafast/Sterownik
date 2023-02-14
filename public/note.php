<?php
if(isset($_POST['note']) && $_POST['note'] != ""){
    $str = substr($_POST['note'], 0, 255);
    $str = trim(strip_tags($str));
    $str = preg_replace('/[^a-zA-Z0-9\s_.!\-]/', '', $str);
        if($str != ""){
            file_put_contents("./note.txt", "$str\n", FILE_APPEND);
            header('location:thankyou.php');

        }else{
            header('location:baddata.php');
        }
    }else{
        header('location:nodata.php');
}

?>