<?php
//Creamos la funcion esPrimo, pasando el entero "$numero" como parametro
function esPrimo($numero)
{
    //Para todos los numeros menores o iguales a 1 no son primos, lo validamos con este if
    if ($numero <= 1) {
        return "no es primo";
    }

    //todos los numeros que no sean divisbles entre 1, o por si mismo, no son primos, lo validamos con este bucle for
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            return "no es primo";
        }
    }

    //Los numeros divisibles entre 1 y por si mismos son primos, retornaremos el valor que no haya entrado en el bucle for
    return "es primo";
}

//Capturamos el valor y lo imprimimos
$numero = 2;
echo "El numero $numero " . esPrimo($numero);
