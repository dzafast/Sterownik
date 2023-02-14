
        <p><?php echo $napis1; ?></p>

            <?php
            $filesPath = "./upload/";
            function printList($path)
            {
                $fd = opendir($path);
                if(!$fd) return false;
                while (($file = readdir($fd)) !== false){
                    if(is_dir($path.$file)) continue;
                    echo "<a href=\"./download.php?name=";
                    echo "$file\">$file</a><br />";
                }
                closedir($fd);
            }
            printList($filesPath);
            ?>

