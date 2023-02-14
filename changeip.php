
    <?php
        $ip = "";
        if(file_exists("ip.txt") == ""){
            fopen("ip.txt", "w");
        };
        $ip = file_get_contents("ip.txt");
        echo "IP: ". $ip;
        // var_dump($ip); // var_dump pokazuje ilość znaków w stringu
    ?>
        <form action="newip.php" method="POST">
            <label class="label">nowy adres IP</label>
            <input type="text" name="newip">
            <input type="submit" value="zapisz">
        </form>



