<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Ejercicio 1</title>
</head>

<body class="py-4 px-1">
    <div class="container is-max-desktop has-background-info-dark box p-4">
        <h1 class="title has-text-primary-light has-text-centered">Costo por Llamada</h1>
    </div>
    <div class="container is-max-desktop box p-0">
        <div class="table-container">
            <table class="has-text-centered table is-fullwidth has-background-info-light">
                <tr>
                    <th>Clave</th>
                    <th>Zona</th>
                    <th>Precio</th>
                </tr>
                <?php foreach($tabla as $celda): ?>
                <tr>
                    <td><?php echo $celda['clave'] ?></td>
                    <td><?php echo $celda['zona'] ?></td>
                    <td><?php echo $celda['precio'] ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div class="container is-max-desktop has-background-info-dark box p-4">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="field has-addons">
                <p class="control">
                    <span class="select">
                        <select name="costo" required>
                            <option disabled value="" selected>Clave</option>
                            <?php foreach($tabla as $celda): ?>
                                <option value="<?php echo $celda['precio']?>"><?php echo $celda['clave']?></option>
                            <?php endforeach; ?>
                        </select>
                    </span>
                </p>
                <p class="control is-expanded">
                    <input name="minutos" min="1" required class="input" type="number" placeholder="Introdusca los minutos">
                </p>
                <p class="control">
                    <input name="llamada" type="submit" class="button">
                </p>
            </div>
        </form>
    </div>
    <div class="container is-max-desktop">
        <a href="../" class="button is-danger">Regresar</a>                        
    </div>

</body>

</html>