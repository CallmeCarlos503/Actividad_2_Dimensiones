<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body background="https://coatepec.gob.mx/wp-content/uploads/2019/09/4K-Moving-Stars-Live-Wallpaper-1.jpg">
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col">
                <?php
                $DATOS[] = [
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
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Dulces</th>
                            <th scope="col">Bebidas</th>
                            <th scope="col">Conservas</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $A = 0;
                        $B = 0;
                        $N = 0;
                        $mesC = "???";
                        foreach ($DATOS[0] as $X => $Y) {
                            $mesC = $X;
                            echo "<tr>";
                            echo "<td>";
                            echo $mesC;
                            echo "</td>";
                            foreach ($DATOS[0][$mesC] as $mesA => $ValorA) {
                                $A = $ValorA;
                                echo "<td>";
                                echo $A;
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                </table>
            </div>
            <div class="col">
                <?php

                $Valor = 0;
                $mes = "???";
                $mesM = "???";
                $valor = 0;
                $ValorB = 0;
                $valorJ = 1000;
                $producto = "Candys";
                $Buscador = 0;
                foreach ($DATOS[0] as $I => $value) {
                    $mes = $I;
                    foreach ($DATOS[0][$mes] as $A => $AS) {
                        if ($valor != $DATOS[0][$mes][2]) { // Calcular promedio de las conservas
                            $valor += $DATOS[0][$mes][2];
                        }
                        if ($ValorB < $DATOS[0][$mes][1]) { // Calcular el valor mayor con su mes
                            $ValorB = $DATOS[0][$mes][1];
                            $mesM = $I;
                        }
                        if ($mes == "Junio") {  //Encontrar el menor valor del mes de Junio
                            foreach ($DATOS[0][$mes] as $llave => $value3) {
                                if ($valorJ > $value3) {
                                    $valorJ = $value3;
                                    $Buscador = $llave;
                                    if ($Buscador == 0) {
                                        $producto = "Dulces";
                                    } else if ($Buscador == 1) {
                                        $producto = "Bebidas";
                                    } else if ($Buscador == 2) {
                                        $producto = "Conservas";
                                    }
                                }
                            }
                        }
                    }
                }
                ?>
                <div class="alert alert-primary" role="alert">
                    <?php
                    echo "El promedio de las conservas fueron: " . $valor / 12;
                    echo "<br>";
                    echo "El valor mayor de bebidas fue : " . $ValorB . " del mes de " . "$mesM";
                    echo "<br>";
                    echo "Rubro con menor costo en Junio fue de  " . $valorJ . " en el area de: " . $producto;

                    ?>
                </div>
            </div>
        </div>
    </div>
    </tbody>
</body>

</html>