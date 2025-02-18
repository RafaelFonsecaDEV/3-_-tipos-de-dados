<?php


$pessoa = [

    'nome' => 'marcos',
    'idade' => 50,
    'profissao' => 'engenheiro',
    'sexo' => 'marculino'



];


print_r($pessoa);


if ($pessoa['idade'] >= 18) {
    echo "pode entrar";
} else {
    echo "nao pode entrar";
}
