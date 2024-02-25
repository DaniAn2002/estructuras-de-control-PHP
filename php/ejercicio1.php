<?php
//Creamos una funcion llamada secuenciaFibonacci, pasandole un entero como parametro
function secuenciaFibonacci($number)
{
    //Creamos la variable fibonacci la cual sera un array
    $fibonacci = array();

    //El valor 0 del array fibonacci sera de 0
    $fibonacci[0] = 0;

    //El valor 1 del array fibonacci sera de 1
    $fibonacci[1] = 1;

    //Creamos un bucle para iniciar la secuencia de fibonacci la cual dicta que una:
    //serie infinita de números naturales que empieza con un 0 y un 1 y continúa añadiendo números que son la suma de los dos anteriores.
    for ($i = 2; $i < $number; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    //Retornamos el array completo
    return $fibonacci;
}

//Capturamos el dato del $number 
$resultados = secuenciaFibonacci(10);

//Dentro de la variable $total se contara el valor de posiciones dentro de $resultados
$total = count($resultados);

//Recorremos el arreglo de resultados con foreach, tomamos el valir de cada posicion con indice y si $indice es menor al $total - 1 se imprimira una coma
//cuando llegue al final del arreglo, la coma ya no se imprimira despues del ultimo valor
echo "Los primeros numeros de la serie de Fibonacci son: ";
foreach ($resultados as $indice => $numero) {
    echo $numero;
    if ($indice < $total - 1) {
        echo ", ";
    }
}
