<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estructuras de Control</h1>
    <?php
    //if, if.else
    echo "<h1>if</h1>";
    //Ejemplo 1
    $color ="rojo";
    if($color = "rojo")
    {
        print("Efectivamente, el color es rojo");
    }
    echo "<br>";
    //Ejemplo 2
    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("X e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    elseif($x < $y)
    {
        print("X es menor qu y");
    }
    echo "<br>";
    echo "<h1>while</h1>";
    //while
    //indica que mientras no se cumpla una detrminada condicion, no se saldra del bucle y no 
    // saltara a la siguiente linea de codigo
    $x = 10;
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print("Numero: ",$x);
        echo "<br>";
        echo "<hr>";
    }
    //do.while
    //for
    // sera utilizando para ejecutarun bucle un determinado numero de veces, hasta que se cumpla una 
    // condicion

    for($x=5; $x<=10; $x++)
    {
        print("Numero; ",$x,"<br>")
    }
    //requiere
    // srive para incluir archivos n nuestras paginas y soo sera necesario hacer referencia
    // a este archivo con la instrucion requiere, se usa principalmnte para definir variables,
    // y estas estaran listas una vez hagamos una llamada al archivo donde esten guardadas

    //include
    // el funcionamiento es igual que el de la instruduccion requiere(), con la diferencia de que si
    // puede procesar el codigo tantas veces como la llamemos a esa pagina externa.
    include("variabes.php")
    echo "<br>"
    print("$x","$z","$y");
    //switch
    // se utilizan para omprobar un datoentre varias posibiidades
    echo "<br>"
    echo "<h1>switch</h1>";
    $color = "negro";
    switch($color)
    {
        case 'blanco'
            $sector = 'claro';
            break;
        case 'naranja':
            $sector = 'normal';
            break;
        case 'negro';
            $sector = 'oscuro';
            break;
    }
    ?>
</body>
</html>