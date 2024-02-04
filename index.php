<?php 

$listado_nombres = ['David', 'Ivan','Carlos', 'Mario', 'Esteban', 'etc'];
$listado_mixto = [ 'ivan.alvarado@serprogramador.es', true, 12, 45.7, $listado_nombres ];
$listado_equipo_computo = [ 
    'david' => [
        'procesador' => 'Intel Core i5',
        'memoria_ram' => 16,
        'pantalla' => 15
    ],
    'mario' => [
        'procesador' => 'Intel Core i9',
        'memoria_ram' => 24,
        'pantalla' => 14
    ],
    'ramon' => [
        'procesador' => 'AMD Ryzen 9',
        'memoria_ram' => 32,
        'pantalla' => 15
    ]
];
# Operador ternario
$resultado = 7 > 9 ? 'Siete es mayor que nueve' : 'algo esta mal';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1</title>
</head>
<body>
    
    <h1>Trabajando con arrays</h1>

    <ul>
        <?php  foreach( $listado_nombres as $index => $nombre )  { ?>
            <li>
                <?= $nombre; ?>
            </li>
        <?php  } ?>
    </ul>

    <?= $listado_nombres[1]; ?>    
    <?php if($listado_mixto[1] == true){ ?>
        Verdadero
        <?php } else { ?>
        False
    <?php } ?>
    <hr/>
    <?= $listado_mixto[1] == true ? 'Verdadero' : 'Falso' ?>    

    <h2>Listado de equipos de computo</h2>

    <?php foreach($listado_equipo_computo as $responsable => $valores){ ?>

        <h3>Responsable: <?= $responsable ?></h3>
        <div>
            <ul>
                <li><?= $valores['procesador'] ?></li>
                <li><?= $valores['memoria_ram'] ?></li>
                <li><?= $valores['pantalla'] ?></li>

            </ul>
        </div>

    <?php  } ?>

</body>
</html>