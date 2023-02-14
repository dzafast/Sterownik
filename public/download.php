
<?php
$filesPath = "./upload/";
function checkFileName($name, $path){
    $fd = opendir($path);
    if(!$fd) return false;
    $result = false;
        while (($file = readdir($fd)) !== false){
        if(is_dir($path.$file)) continue;
        if($file == $name){
            $result = true;
            break;
        }
    }
    closedir($fd);
    return $result;
}
function send($fileName, $filePath){
    if(!file_exists($filePath.$fileName)){
        echo 'Nie ma takiego pliku na serwerze!';
        return;
    }
    $fd = fopen($filePath.$fileName,"r");
    $size = filesize($filePath.$fileName);
    $contents = fread($fd, filesize($filePath.$fileName));
    fclose($fd);
    header("Content-Type: application/octet-stream");
    header("Content-Length: $size;");
    header("Content-Disposition: attachment; filename=$fileName");
    echo $contents;
}
if(isSet($_GET['name'])){
    if(!checkFileName($_GET['name'], $filesPath)){
    echo 'Nie ma takiego pliku na serwerze!';
    }else{
    send($_GET['name'], $filesPath);
    }
}else{
echo 'Nie ma takiego pliku na serwerze!';
}
?>