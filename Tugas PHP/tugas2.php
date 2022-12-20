<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Latihan 2</h2>
    <?php
    $bilangan=array(0,2,4,6);
    $hasil=0;
    foreach($bilangan as $bilanganIni)
    {

        echo(($hasil)."+".$bilanganIni."=");

        $hasil=+$hasil+$bilanganIni;
    
        echo($hasil." <br>")  ;
    }

    echo ("Akumululasi dari bilangan genap dari ".
    $bilangan[0].
    " sampai dengan "
    .$bilangan[count($bilangan)-1]." adalah ".$hasil)
    ?>


</body>
</html>