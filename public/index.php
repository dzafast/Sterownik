<?php
    $napis1 = <<< 'ID1'
    ifconfig
    ID1;
    $napis2 = <<< 'ID2'
    Siła sygnału
    ID2;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Bitter&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>Sterownik</title>
  </head>
  <header>
      <nav id="menu">
        <a href="admin.php">Admin</a>
        <a href="form.php">Serwis</a>
        <span style="color: black;">STEROWNIK - v001</span>
      </nav>
  </header>
  <body>
    <div class="container">
      <p>
        Status
      </p>
      <div class="pasek-lewy">

      </div>
      <div class="ramka-ifconfig">
          <p>
            <?php echo $napis1; ?>
          </p>
          <hr>
          <?php
            echo '<pre>';   
                $status = system('/sbin/ifconfig', $retval);
            echo '</pre>
            <hr />Dane wyjściowe: ' . $status . '
            <hr />Zwrócona wartość: ' . $retval;
          ?>
      </div>
      <div class="ramka-mod">
        <p>
          <?php echo $napis2; ?>
        </p>
        <hr>
        <?php
          exec('/Komster/skrypty/mod_sila')
        ?>
      </div>
    </div>
  </body>
      <div style="clear: both;">
        <footer class="index-footer"> 
            <a href="https://www.komster.com/">  www.komster.com</a>
        </footer>
      </div>
</html>



