<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Por favor insira o nome';        
        return false;
    }
    else if(strlen($nome) > 0 && strlen($nome) < 3)
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
        header('location: index.php');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
        header('location: index.php');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'O campo idade não pode ser vazio.';
        return false;    
    }
    return true;
}    
    