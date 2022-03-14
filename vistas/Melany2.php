<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>

<body>
    <?php
    $Dimension[] =
        [
            "Enero" => [8, 25, 60],
            "Febrero" => [25, 50, 42],
            "Marzo" => [30, 90, 45],
            "Abril" => [86, 56, 21],
            "Mayo" => [90, 45, 83],
            "Junio" => [200, 60, 47],
            "Julio" => [50, 23, 58],
            "Agosto" => [23, 21, 25],
            "Septiembre" => [66, 28, 87],
            "Ocrtubre" => [80, 26, 60],
            "Noviembre" => [10, 27, 45],
            "Diciembre" => [90, 32, 24]
        ];
    ?>
    <table border="1" bordercolor="blue">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Dulces</th>
                <th scope="col">Bebidas</th>
                <th scope="col">Conservas</th>
            </tr>
        </thead>
        <?php
        foreach ($Dimension[0] as $B1 => $V1) {
            echo "<tr>";
            echo "<td>";
            echo $B1;
            echo "</td>";
            foreach ($Dimension[0][$B1] as $B2 => $V2) {
                echo "<td>";
                echo $V2;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <?php
    $Mayor = 0;
    $Menor = 1000;
    $Cumulo = 0;
    $producto = "???";
    $Posicion = 0;
    $Mes="???";
    $Proceso="???";
    foreach ($Dimension[0] as $B3 => $V3) {
        
        foreach ($Dimension[0][$B3] as $b4 => $v4) {
            if ($Cumulo != $Dimension[0][$B3][0]) {
                $Cumulo += $Dimension[0][$B3][0];
                
            }
            if ($Mayor < $Dimension[0][$B3][2]) {
                $Mayor = $Dimension[0][$B3][2];
                $Mes=$B3;
            }
            if ($B3 == "Enero") {
                $Proceso=$B3;
                foreach ($Dimension[0][$Proceso] as $P1 => $P2) {
                    if ($Menor > $P2) {
                        $Menor = $P2;
                        $Posicion = $P1;
                        if ($Posicion == 0) {
                            $producto = "Dulces";
                        } else if ($Posicion == 1) {
                            $producto = "Bebidas";
                        } else if ($Posicion == 2) {
                            $producto = "Conservas";
                        }
                    }
                }
                }
                
        }
    }
      echo "Promedio de bebidas: ".round($Cumulo/12);
      echo "<br>";
      echo "Mes con mayor costo de produccion de Conservas: ".$Mes." Con una cantidad de ".$Mayor;
      echo "<br>";
      echo "Rubro con menor costo en la produccion de Enero fue: ".$Menor. " En el area de ".$producto;
    ?>
</body>

</html>