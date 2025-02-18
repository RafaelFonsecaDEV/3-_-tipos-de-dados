<?php


$pessoa = [

    'nome' => 'marcos',
    'idade' => 50,
    'profissao' => 'engenheiro',
    'sexo' => 'marculino'



];

if ($pessoa['idade'] >= 18) {
    echo "pode entrar";
} else {
    echo "nao pode entrar";
}
