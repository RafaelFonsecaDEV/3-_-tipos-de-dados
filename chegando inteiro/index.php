<?php

if (is_int(5)) {
    echo " e um inteiro <br>";
}


if (is_int("nao e um inteiro")) { // como nao e um inteiro ele nao vai imprimir no navegador
    echo " e um inteiro 2 <br>";
}

$a = 5;

if (is_int($a)) {
    echo " e um inteiro 3 <br>";
}
