<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>USANDO VARIABLES</h1>
    <?php
    //No llamemos a nuestras variables con nombres: x,y,z,...,etc
    //Poner nombres representativos a lo que se debe de guardar
    /*Cuando se unen dos palabras en una variable 
    usar la nomenclatura camel case ejemplo 'salarioMensual'*/
    $nombre='Alondra';
    $edad=20;
    $salarioMensual=3200.50;
    $sindicalizado=false;
    //El punto(.) se usa para concatenar
    echo $nombre.'<br>';
    echo $edad.'<br>';
    echo $salarioMensual.'<br>';
    echo $sindicalizado.'<br>';
    echo 'Empleado:  '.$nombre.'  tiene  '. $edad.'  años';
    ?>
    <h1>Operaciones aritméticas</h1>
    <?php
    $numero1=15;
    $numero2=10;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    echo 'Suma:'.$suma.'    Resta:'.$resta.
    '   Multiplicación:'.$multiplicacion.'  División:'.$division;
    echo 'Suma:   '.($numero1+$numero2);
    if($sindicalizado==true)
    {
        echo 'Va a huelga';
    }
    else
    {
        echo 'Trabajará';
    }
    ?>
</body>
</html>