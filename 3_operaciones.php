<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <h1>Operaciones</h1>
    <?php
    //Operaciones aritmeticos
    // Suma: +
    // Resta: -
    // Mutiplicacion: *
    // Divición: / 
    // Modulo: %
    // Incremento: ++
    // Decremento: --
    // Exponente: **
    $x = 9;
    echo ("X = ",$x,"<br>");
    $y = 3;
    echo ("y = ",$y,"<br>");
    $z = 5;
    echo ("z = ",$z,"<br>");
    $suma = $x + $y;
    echo ("suma = ",$suma,"<br>");
    $resta = $x - $z;
    echo ("resta = ",$resta,"<br>");
    $multiplicacion = $suma*$resta;
    echo ("multipicacion = ",$multiplicacion,"<br>")
    $final = $multiplicacion++;
    echo("final = ",$final,"<br>");
    echo ("multiplicacion =",$multiplicacion,"<br>")
    //Operaciones de comparacion
    // Igual: ==
    // Identico: ===
    // Diferente: !=
    // Menor: <
    // Mayor: >
    // Menor o igual: <=
    // mayor o igual: >=
    echo "<h1>Operadores de comparacion</h1><br>";
    $x = 5;
    $y = 5;
    echo (5x == $y);
    echo (5x <= $y);
    //Operaciones logicos
    // AND o &&: $a && $b es true si $a y $b son verdaderos
    // OR o ||: $a || $b son verdaderos
    // XOR: $a XOR $b es True si $a es verdadero o sb es verdadero, pero no los dos
    // !: !$a es True si $a es false
    echo "<h1>Operadores logicos</h1><br>"
    $x = 4;
    $y = 5;

    if(($x==4) && ($y==5))
    {
        print("Estas en lo correcto")
    }
    echo"<br>"
    if(($x==4) && ($y==3))
    {
        print("La segunda operacion tambien es correcta")
    }

    //Operaciones de union de cadenas
    echo "<h1>Operadores de union de cadenas</h1><br>"
    $t = "Ejemplo";
    $w = 'union';
    $x = "de";
    $y = "cadenas";
    $z = ' ';
    $resultado1 = $t;
    $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;
    echo "<hr>";
    echo $resultado2;
    echo "</b></hr>";
    ?>

</body>
</html>