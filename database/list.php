<main>
<link rel="stylesheet" href="\css\style.css">
<?php

include "database/Mydb.php";

$pdo = new Mydb;
$sql = "SELECT * FROM usuarios";
$prepare =  $pdo->__construct()->query($sql);

echo "<h1 class='h1'>Usuarios</h1>";
sendMessage();
echo "<table class='table table-hover' id='alunos'>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</>
        </tr>
    </thead>";

foreach ($prepare as $row) {
    $id_row = $row['id'];
    echo "<tr>"
        
?>
        <td><a href="?pagina=dados&id=<?php echo $id_row?>"><?php echo $row['nome'] ?></a></td>
        <td><?php echo $row['email'] ?></td>
        <td><a class="btn btn-warning" href="?funcao=deletar&id=<?php echo $id_row?>"onclick="alertDelete();">Excluir</a><a type="submit" class="btn btn-warning" href="?pagina=update&id=<?php echo $id_row?>">Editar</a></td>
<?php
    }
echo "</tr></table>";
?>
</main>