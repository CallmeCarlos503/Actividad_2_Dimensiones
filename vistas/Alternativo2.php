<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body background="https://i.pinimg.com/originals/39/87/eb/3987ebbc24f3b23c87ff746109f68c88.jpg">
    <div class="container">
        <br><br>
        <div class="row">

            <div class="col">
                <?php
                $DATOS = array(
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
                        $MesM = "???";
                        $ValorM = 0;
                        $Promedio = 0;
                        $Acumulador = 0;
                        $ValorMM = 1000;
                        $N = 0;
                        $producto = "???";
                        foreach ($DATOS as $P1 => $V1) {
                            echo "<tr>";
                            echo "<td>";
                            echo "$P1";
                            echo "</td>";
                            foreach ($DATOS[$P1] as $P2 => $V2) {
                                echo "<td>";
                                echo "$V2";
                                echo "</td>";
                                if ($ValorM < $DATOS[$P1][2]) {
                                    $ValorM = $DATOS[$P1][2];
                                    $MesM = $P1;
                                }
                                if ($P1 == "Enero") {
                                    if ($ValorMM > $V2) {
                                        $ValorMM = $V2;
                                        $N = $P2;
                                        if ($N == 0) {
                                            $producto = "Dulces";
                                        }
                                        if ($N == 1) {
                                            $producto = "Bebidas";
                                        }
                                        if ($N == 2) {
                                            $producto = "Conservas";
                                        }
                                    }
                                }
                                if ($Acumulador != $DATOS[$P1][0]) {
                                    $Acumulador = $DATOS[$P1][0];
                                    $Promedio += $DATOS[$P1][0];
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    a) ??En qu?? mes se registro el mayor costo de producci??n de conservas? (25%)<br>
                    en el mes de: <?php echo "$MesM"; ?>
                    <br>
                    b) Promedio anual de los costos de producci??n de dulces. (25%) <br>
                    Su promedio es: <?php echo round($Promedio / 12); ?>
                    <br>
                    c) ??Cu??l fue el rubro que tuvo el menor costo de producci??n en enero? (50%)<br>
                    el menor costo fue de <?php echo "$ValorMM"; ?> en el area de <?php echo "$producto"; ?>
                    <br>
                </div>

            </div>
        </div>
    </div>

    </div>
    </div>
</body>

</html>
