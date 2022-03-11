<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $DATOS[]=["ENERO"=>[1,2,5],"FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"];
    $DATOS[]=[8,25,60,25,50,42,30,90,45,86,56,21,90,45,83,200,60,47,50,23,58,23,21,25,66,28,87,80,26,60,10,27,45,90,32,24];
    $matriz1[]=[8,25,60,25,50,42,30,90,45,86,56,21,90,45,83,200,60,47,50,23,58,23,21,25,66,28,87,80,26,60,10,27,45,90,32,24];
    
    ?>
    <?php
    print "<pre>"; print_r($DATOS); print "</pre>\n";
    $A = 0;
    $B = 0;
    $N=0;
    
    while ($A < 12) {
        $B = 0;
        
        while ($B < 3) {

            echo $matriz1[0][$N];
            
            echo "<br>";
            $N++;
            $B++;
        }
        $A++;
        echo"<br>";
    }
    ?>

</body>

</html>