        
        <!-- MENU BOCZNE -->
            <!-- KONFIGURACJA -->
            <div class="nav">
                <div class="nav-menu">
                    <div class="text-white"><?php echo $napis7 ?></div>
                </div>
                <div class="text-blue">
                    <a href="stanowisko.php"><?php echo $napis5 ?></a>
                </div>
                <div class="text-blue">
                    <a href="ethernet.php"><?php echo $napis11 ?></a>
                </div>
                <div class="text-blue">
                    <a href="ntpclient.php"><?php echo $napis14 ?></a>
                </div>
                <div class="text-blue">
                    <a href="mobilewan.php"><?php echo $napis30 ?></a>
                </div>
                <div class="text-blue">
                    <a href="servis.php"><?php echo $napis23 ?></a>
                </div>
                <div class="text-blue">
                    <a href="status.php"><?php echo $napis2 ?></a>
                </div>
            <!-- ADMINISTRACJA -->
                <div class="nav-menu">
                    <div class="text-white"><?php echo $napis6 ?></div>
                </div>
                <!-- POBIERZ KONFIGURACJĘ -->
                <div class="text-blue">
                    <a href="backup_config.php"><?php echo $napis24 ?></a>
                </div>
                <!-- WYŚLIJ KONFIGURACJĘ -->
                <div class="text-blue">
                    <a href="up_config.php"><?php echo $napis19 ?></a>
                </div>
                <hr>
                <!-- POBIERZ FIRMWARE (tylko srwis)-->
                <!-- <div class="text-blue">
                    <?php
                        // if($_SESSION['zalogowany'] == 'serwis'){
                        //     echo 'Pobierz Firmware';
                        // }else{
                        //     echo '<a href="backup_firmware.php">Pobierz Firmware</a>';
                        // }
                    ?>
                </div> -->
                <!-- WYŚLIJ FIRMWARE (tylko srwis)-->
                <div class="text-blue">
                    <?php
                        if($_SESSION['zalogowany'] == 'serwis'){
                            echo 'Wyślij Firmware';
                        }else{
                            echo '<a href="send.php">Wyślij Firmware</a>';
                        }   
                    ?>
                </div>
                <!-- POBIERZ LOGI (tylko admin)-->
                <div class="text-blue">
                    <?php
                        if($_SESSION['zalogowany'] == 'serwis'){
                            echo '<a href="no_page.php">Pobierz Logi</a>';
                        }else{
                            echo 'Pobierz Logi';
                        }                    
                    ?>
                </div>
                <hr>
                <div class="text-blue">
                    <div style="color: red">Zalogowany: <?php echo $_SESSION['zalogowany'] ?></div>
                    <div class="logout"><a href="index.php">Wyloguj</a></div>
                </div>
                <hr>
                <!-- ZMIANA HASŁA (tylko admin)-->
                <div class="text-blue">
                    <?php
                        if($_SESSION['zalogowany'] == 'admin'){
                            echo '<a href="oldpass.php">Zmiana hasła</a>';
                        }else{
                            echo 'Zmiana hasła';
                        }
                    ?>
                </div>
                <hr>
                <div class="text-blue">
                    <a href="restart.php">Restart</a>
                </div>
                <hr>
            </div>
    <!-- KONIEC MENU BOCZNE -->
    