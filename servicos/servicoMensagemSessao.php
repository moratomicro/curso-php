<?php
    session_start();

    // Mensagens de Sucesso.
    function setarMensagemSucesso(string $mensagem) : void
    {
        $_SESSION['mensagem-de-sucesso'] = $mensagem;
    }

    function obterMensagemSucesso() : ?string
    {
        if(isset($_SESSION['mensagem-de-sucesso']))
            return $_SESSION['mensagem-de-sucesso'];

        return null;
    }

    // Mensagens de Erro.
    function setarMensagemErro(string $mensagem) : void
    {
        $_SESSION['mensagem-de-erro'] = $mensagem;
    }

    function obterMensagemErro() : ?string
    {
        if(isset($_SESSION['mensagem-de-erro']))
            return $_SESSION['mensagem-de-erro'];

        return null;
    }

    function removeMensagemSucesso() : void
    {
        if(isset($_SESSION['mensagem-de-sucesso']))
            unset($_SESSION['mensagem-de-sucesso']);
    }

    function removeMensagemErro() : void
    {
        if(isset($_SESSION['mensagem-de-erro']))
            unset($_SESSION['mensagem-de-erro']);
    }