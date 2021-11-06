<?php

session_start();

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
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Por favor insira o nome';
    header('location: index.php');
}

if(strlen($nome) > 0 && strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
    header('location: index.php');
}

if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
    header('location: index.php');
}

if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'O campo idade não pode ser vazio.';
    header('location: index.php');
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