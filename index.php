<?php
$categorias = [];
$categorias[]='infantil';
$categorias[]='adolecente';
$categorias[]='adulto';
$categorias[]='idoso';

//print_r($categorias);

$nome = 'Eduardo';
$idade = 8;

//var_dump($nome);
//var_dump($idade);

if($idade >=6 && $idade <=12)
{

    for ($idade = 0;$idade <= count ($categorias); $idade++)
    {
        if ($categorias[$idade] == 'infantil')

    echo "O nadador " .$nome. " compete na categoria infantil";
}
    }

else if($idade >=13 && $idade <=18)
{
    for ($idade = 0;$idade <= count($categorias); $idade++)
    {
        if ($categorias[$idade] == 'adolecente')
    echo "O nadador " .$nome. " compete na categoria adolecente";
}

    }



?>