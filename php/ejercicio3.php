<?php

//Creamos la funcion esPalindromo y le pasamos un string como parametro
function esPalindromo($string)
{

    //Nos aseguramos que todas las letras esten en minusculas y de igual forma que no haya espacio entre las letras
    $string = strtolower(str_replace(" ", "", $string));

    //Creamos la variable lenght, que tomara el numero de letras de la variable string
    $length = strlen($string);

    //Creamos un bucle for para validar que no haya letras iguales contando en 1 desde el inicio hasta el final
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            return "no es un palindromo";
        }
    }

    //Para todo aquello que no entre dentro del bucle for, sera un palindromo
    return "es un palindromo";
}

//Pasamos un string a la variable y lo imprimimos
$string = "PHP";
echo "La siguiente cadena de texto: $string " . esPalindromo($string);

