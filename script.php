<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio.';
    return;
}

if(strlen($nome) < 3)
{
    echo 'o nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'o nome é muito extenso.';
    return;
}

//var_dump($nome);
//var_dump($idade);

if($idade >= 0 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        echo "O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".";
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        echo "O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".";
    }
}
else if($idade >= 19 && $idade <= 49)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        echo "O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
        echo "O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".";
    }
}