<?php


session_cache_expire(1);
session_start();
function sendMessage(){
    if (isset($_SESSION['mensagem'])){
        echo "<p class='session'>" . $_SESSION['mensagem'] ?? "" . "</p>";
        unset($_SESSION['mensagem']);
        session_write_close();
    }
}
function sendNome(){
    if(isset($_SESSION['nome'])) {
        echo "<p class='session-nome'>" . $_SESSION['nome'] . "</p>";
        unset($_SESSION['nome']);
        session_write_close();
    }
}

function sendSenha(){
    if(isset($_SESSION['senha'])) {
        echo "<p class='session-nome'>" . $_SESSION['senha'] . "</p>";
        unset($_SESSION['senha']);
        session_write_close();
    }
}



