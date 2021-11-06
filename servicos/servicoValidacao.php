<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio. Por favor insira o nome');
        return false;
    }
    else if(strlen($nome) > 0 && strlen($nome) < 3)
    {
        setarMensagemErro('O nome não pode conter menos de 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('O campo idade não pode ser vazio.');
        return false;    
    }
    return true;
}    
    