<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 1</title>
</head>
<body class="py-4 px-1">
    <div class="container is-max-desktop has-background-info-dark box p-4">
        <h1 class="title has-text-primary-light has-text-centered">Ejercicios con PHP</h1>
    </div>
    <div class="container is-max-desktop box p-0">
        <table class="table is-fullwidth has-background-info-light">
            <tr>
                <th rowspan="3" colspan="3">Países Europeos</th>
                <td>España</td>
                <td>Madrid</td>
            </tr>
            <tr>
                <td>Fracia</td>
                <td>Paris</td>
            </tr>
            <tr>
                <td>Reino Unido</td>
                <td>Londres</td>
            </tr>
            <tr>
                <th rowspan="3" colspan="3">Países Americanos</th>
                <td>EEUU</td>
                <td>Washington</td>
            </tr>
            <tr>
                <td>Canada</td>
                <td>Toronto</td>
            </tr>
            <tr>
                <td>México</td>
                <td>México</td>
            </tr>
        </table>
    </div>
    <div class="container is-max-desktop has-background-info-dark box p-4">
    <?php
        $numero = rand (1, 20);
        $sumatoria = 0;
        echo('<span class="tag is-danger is-large m-1">' . $numero . '... </span>');
        while($numero > 0){
            echo('<span class="tag is-danger is-light m-1">' . $numero . ' + </span>');
            $sumatoria = $sumatoria + $numero;
            $numero--;
        } 
        echo('<span class="tag is-danger is-large m-1"> = ' . $sumatoria . '</span>');
    ?>  
    </div>

    <div class="container is-max-desktop has-background-info-dark box p-4 is-flex is-justify-content-center">
        <div class="table-container">
            <table class="table is-bordered rayado">
                <?php
                    for($i = 0; $i < 99; $i+=10){
                        echo '<tr>';
                        for($j = 0; $j < 10; $j++){
                            echo '<td>' . ($j + $i) . '</td>';
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="container is-max-desktop">
        <a href="./llamadas" class="button is-danger">Costo x llamada</a>            
    </div>
</body>

</html>