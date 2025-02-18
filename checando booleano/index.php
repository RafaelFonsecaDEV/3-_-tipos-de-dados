<?php

$a = true;

if (is_bool($a)) {
    echo "e um booleano 1 <br>";
}

if (is_bool(0)) { // o zero  e um numero por isso não aparece nada navegador
    echo "e um booleano 2 <br>";
}

if (is_bool(false)) {
    echo "e um booleano 3 <br>";
}


if (0.0 == false) {
    echo "0.0 e igual a false <br>";
}
