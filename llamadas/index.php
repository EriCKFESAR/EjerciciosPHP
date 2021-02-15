<?php

$tabla = [
    ['clave' => 12, 'zona' => 'América del norte', 'precio' => 2],
    ['clave' => 15, 'zona' => 'América Central', 'precio' => 2.2],
    ['clave' => 18, 'zona' => 'América del Sur', 'precio' => 4.5],
    ['clave' => 19, 'zona' => 'Europa', 'precio' => 3.5],
    ['clave' => 23, 'zona' => 'Asia', 'precio' => 6],
    ['clave' => 25, 'zona' => 'África', 'precio' => 6],
    ['clave' => 29, 'zona' => 'Oceanía', 'precio' => 5],
];


if(isset($_POST['llamada'])){
    if(!empty($_POST['costo']) and !empty($_POST['minutos'])){
        $costo = $_POST['costo'] * $_POST['minutos'];
        echo"
        <script>
            alert('El costo de la llamada es: $costo pesos');
        </script>
        ";
    }
}

require('./llamadas.view.php');

?>


