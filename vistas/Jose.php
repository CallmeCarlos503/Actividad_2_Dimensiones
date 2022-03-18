<html>

<head>

</head>



<body>
    <?php
    $datos = array(
        "Enero" => [8, 25, 60],
        "Febrero" => [25, 50, 42],
        "Marzo" => [30, 90, 45],
        "Abril" => [86, 56, 21],
        "Mayo" => [90, 45, 83],
        "Junio" => [200, 60, 47],
        "Julio" => [50, 23, 58],
        "Agosto" => [23, 21, 25],
        "Septiembre" => [66, 28, 87],
        "Octubre" => [80, 26, 60],
        "Noviembre" => [10, 27, 45],
        "Diciembre" => [90, 32, 24]
    );
    ?>
    <h3> UNIDAD 2 - EJERCICIO 2 </h3>
    <h3> COSTOS DE PRODUCCION </h3>
    <br>
    <table border="1" bordercolor="blue">
        <tr>
            <td>
                &nbsp;
            </td>
            <td>
                Dulces
            </td>
            <td>
                Bebidas
            </td>
            <td>
                Conservas
            </td>
        </tr>

        <tr>
            <?php
            foreach ($datos as $posicion => $llenado) {
                echo "<tr>";
                echo    "<td width='125px' bgcolor='yellow'>";
                echo        $posicion;
                echo    "</td>";


                foreach ($datos[$posicion] as $posicion2 => $llenado2) {
                    echo "<td width='75px' align='right'>";
                    echo    $llenado2;
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    <br>



    <?php
    $Mayor = 0;
    $MesM = "???";
    $Diferencial = 0;
    $Acumulador = 0;
    $Menor = 1000;
    $Producto = "";
    $Posicion = 0;
    foreach ($datos as $Posicion3 => $llenado3) {
        foreach ($datos[$Posicion3] as $Posicion4 => $llenado4) {
            if ($Mayor < $datos[$Posicion3][2]) {
                $Mayor = $datos[$Posicion3][2];
                $MesM = $Posicion3;
            }

            if ($Diferencial != $datos[$Posicion3][1]) {
                $Diferencial = $datos[$Posicion3][1];
                $Acumulador = $Acumulador + $datos[$Posicion3][1];
            }

            if ($Posicion3 == "Enero") {
                if ($Menor > $llenado4) {
                    $Menor=$llenado4;
                    $Posicion = $Posicion4;
                    if ($Posicion == 0) {
                        $Producto = "Dulces";
                    } else if ($Posicion == 1) {
                        $Producto = "Bebidas";
                    } else if ($Posicion == 2) {
                        $Producto = "Conservas";
                    }
                }
            }
        }
    }

    ?>
    <table border="1">
        <tr>
            <td>
                <?php
                echo "¿En qué mes se registro el mayor";
                echo "<br>";
                echo "costo de producción de conservas?";
                ?>
            </td>
            <td width='125px'>
                <?php
                echo $MesM;
                ?>
            </td>
            <td width='50px' align='right'>
                <?php
                echo $Mayor;
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php
                echo "Promedio anual de los costos";
                echo "<br>";
                echo "de producción de dulces";
                ?>
            </td>
            <td align='right'>
                <?php
                echo ($Acumulador / 12);
                ?>
            </td>
            <td>
                <?php



                ?>
            </td>

        </tr>

        <tr>
            <td>
                <?php
                echo "¿Cuál fue el rubro que tuvo el menor";
                echo "<br>";
                echo "costo de produccion en enero?";
              
                ?>
            </td>
            <td>
                <?php
                echo ($Producto);
                ?>
            </td>
            <td>

            </td>

        </tr>
    </table>




</body>

</html>