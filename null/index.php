<?php


echo null;

$nome = NULL;


if (is_null($nome)) {
    echo "a variavel nome e nula";
}

$nome = "mateus"; // nome nao e mais nulo foi atribuido um valor a ele ""mateus e vira uma string
if (is_null($nome)) {
    echo "a variavel nome e nula";
}
