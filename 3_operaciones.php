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
    
    echo (5 % 3)."\n";           // muestra 2
    echo (5 % -3)."\n";          // muestra 2
    echo (-5 % 3)."\n";          // muestra -2
    echo (-5 % -3)."\n";         // muestra -2

    //Operaciones de comparacion
    // Booleanos y null son comparados siempre coomo bool
var_dump(1 == TRUE);  // TRUE - same as (bool)1 == TRUE
var_dump(0 == FALSE); // TRUE - same as (bool)0 == FALSE
var_dump(100 < TRUE); // FALSE - same as (bool)100 < TRUE
var_dump(-10 < FALSE);// FALSE - same as (bool)-10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool)NULL < (bool)-100 is FALSE < TRUE


    //Operaciones logicos
    

    //Operaciones de union de cadenas

    ?>

</body>
</html>