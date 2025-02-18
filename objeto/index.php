<?php

class pessoa
{
    public $nome;
    function falar()
    {
        echo "ola pessoal";
    }
}





$rafael = new pessoa();

$rafael->nome = "rafael";

echo $rafael->nome;

echo "<br>";

$rafael->falar();
