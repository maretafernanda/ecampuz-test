<html>
  <head>
    <title>ARRAY LOOP</title>
  </head>
  <body> 
    <?php 
    echo "#NO 1";
    echo "\n";
    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'eOviz';

    $i = 1;
    while ($i<=5)
    {
      echo $aplikasi[$i].", ";
      $i++;
    }
?>
  </body>
</html>
