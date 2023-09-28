<?php

// Variables que almacenarán los datos de los empleados
$nombre_apellido = [];
$edad = [];
$estado_civil = [];
$sexo = [];
$sueldo = [];

// Ingreso de los datos de los empleados
for ($i = 0; $i < 5; $i++) {
    $nombre_apellido[$i] = readline("Ingrese el nombre y apellido del empleado $i: ");
    $edad[$i] = readline("Ingrese la edad del empleado $i: ");
    $estado_civil[$i] = readline("Ingrese el estado civil del empleado $i: ");
    $sexo[$i] = readline("Ingrese el sexo del empleado $i: ");
    $sueldo[$i] = readline("Ingrese el sueldo del empleado $i: ");
}

// Total de empleados del sexo femenino
$total_empleados_femenino = 0;
for ($i = 0; $i < 5; $i++) {
    if ($sexo[$i] == "Femenino") {
        $total_empleados_femenino++;
    }
}

// Total de hombres casados que ganan más de 2500 Bs
$total_hombres_casados_mas_2500 = 0;
for ($i = 0; $i < 5; $i++) {
    if ($sexo[$i] == "Masculino" && $estado_civil[$i] == "Casado" && $sueldo[$i] > 2500) {
        $total_hombres_casados_mas_2500++;
    }
}

// Total de mujeres viudas que ganan más de 1000 Bs
$total_mujeres_viudas_mas_1000 = 0;
for ($i = 0; $i < 5; $i++) {
    if ($sexo[$i] == "Femenino" && $estado_civil[$i] == "Viudo" && $sueldo[$i] > 1000) {
        $total_mujeres_viudas_mas_1000++;
    }
}

// Edad promedio de los hombres
$edad_promedio_hombres = 0;
$contador_hombres = 0;
for ($i = 0; $i < 5; $i++) {
    if ($sexo[$i] == "Masculino") {
        $edad_promedio_hombres += $edad[$i];
        $contador_hombres++;
    }
}
$edad_promedio_hombres = $edad_promedio_hombres / $contador_hombres;

// Imprimimos los resultados
echo "El total de empleados del sexo femenino es: $total_empleados_femenino";
echo "\nEl total de hombres casados que ganan más de 2500 Bs es: $total_hombres_casados_mas_2500";
echo "\nEl total de mujeres viudas que ganan más de 1000 Bs es: $total_mujeres_viudas_mas_1000";
echo "\nLa edad promedio de los hombres es: $edad_promedio_hombres";

?>