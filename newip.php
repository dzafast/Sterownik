<?php
    
    if(isset($_POST['ip1']) && $_POST['ip1'] != "" 
        and isset($_POST['ip2']) && $_POST['ip2'] != "" 
        and isset($_POST['ip3']) && $_POST['ip3'] != "" 
        and isset($_POST['ip4']) && $_POST['ip4'] != "")
        {
        if($ip1 = substr($_POST['ip1'], 0, 15) 
            and $ip2 = substr($_POST['ip2'], 0, 15)
            and $ip3 = substr($_POST['ip3'], 0, 15)
            and $ip4 = substr($_POST['ip4'], 0, 15))
            {
                $wyrazenie = ('/(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/');
                if(preg_match($wyrazenie, $ip1) || preg_match($wyrazenie, $ip2) || preg_match($wyrazenie, $ip3) || preg_match($wyrazenie, $ip4))
                {
                    $ip = $ip1."\n".$ip2."\n".$ip3."\n".$ip4."\n";
                    $file = "/Komster/KONFIG/czas_z_serwera_ntp/ip";
                    $fp = fopen($file, "w");
                    flock($fp, 2);
                    fwrite($fp, $ip);
                    flock($fp, 3);
                    fclose($fp);
                    header('location:ntpclient.php');
                }else{
                    header('location:baddata.php');
                }
            }else{
                header('location:baddata.php');
            }
        }else{
            header('location:baddata.php');
        }
?>