
<?php

require "header.php";
require "services/StartSession.php";

//modularização de páginas
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
}else {
    $pagina = 'home';
}

switch ($pagina) {
    case 'home':include "views/home.php";break;
    case 'list':include "database/list.php";break;
    case 'update':include "database/process_update.php";break;
    case 'cadastrar':include "views/cadastrar.php";break;
    case 'dados':include "database/dados.php";break;
    default: include 'views/home.php'; break;
}

//modularização de funções no banco
include_once "database/Mydb.php";

$executar = new Mydb;
$funcao = null;

if (isset($_GET['funcao'])) {
    $funcao = $_GET['funcao'];
}

switch ($funcao){
    case 'inserir': $executar->insert();
    case 'atualizar': $executar->update();
    case 'deletar': $executar->delete();
}

require "footer.php";
