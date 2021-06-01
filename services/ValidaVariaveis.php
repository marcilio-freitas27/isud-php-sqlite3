<?php

function validaNome($nome){
    if (strlen($nome) < 3) {
        $_SESSION['nome'] = "Nome menor que 3.";
        return false;
    }else {
        return true;
    }
    
}

function validaSenha($senha){
    if (strlen($senha) < 8) {
        $_SESSION['senha'] = "Senha menor que 8.";
        return false;
    }else {
        return true;
    }
    
}

function validaSenhaCarcateres($senha){
    $value = (string)$senha;
    $array = [0,1,2,3,4,5,6,7];

    $count_alpha = 0;
    $count_digit = 0;
    $count_punct = 0;

    foreach ($array as $digit) {
        foreach ((array)$value as $valor) {
            if (ctype_alpha($valor[$digit])) {
                $count_alpha += 1;
            }else if (ctype_digit($valor[$digit])) {
                $count_digit += 1;
            }else if (ctype_punct($valor[$digit])) {
                $count_punct += 1;
            }
        }
    }
    if(($count_alpha < 2 || $count_digit < 2 || $count_punct < 2)){
        $_SESSION['senha'] = "A senha não está no padrão.";
        return false;
    }else if(strlen($senha) > 8){
        $_SESSION['senha'] = "A senha não pode ser maior que 8.";
        return false;
    }else {
        return true;
    }
        
}

