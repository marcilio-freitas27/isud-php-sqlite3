<?php

include_once "services/ValidaVariaveis.php";

class Mydb{
    private $pdo;

    function __construct()
    {
        
        try {
            $this->pdo = new PDO("sqlite:F:\workspace\isud-php+sqlite3\database\database.sqlite3");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->pdo;
    }

    public function insert(){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $header = null;
        
        if ((validaNome($nome) && validaSenha($senha)) && validaSenhaCarcateres($senha)) {
            
            $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')";
                
            $prepare = $this->pdo->prepare($sql);

            $prepare->execute();

            $_SESSION['mensagem'] = "Usuario cadastrado com sucesso.";
            
            $header = "\index.php?pagina=list";
        
        }else {
            $header = "\index.php?pagina=cadastrar";
        }
        header("location: $header");
        header("Cache-Control: no-cache, must-revalidate");
        exit;
    }

    public function update(){
        $id = $_POST['id'] ?? "";
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        $sql = "UPDATE usuarios SET nome = :nome, senha = :senha WHERE id = :id";

        $prepare = $this->pdo->prepare($sql);

        $prepare->execute(array(
            ':id' => $id,
            ':nome' => $nome,
            ':senha' => $senha
        ));

        $_SESSION['mensagem'] = "Usuario alterado com sucesso.";
        header("location: \index.php?pagina=list");
        header("Cache-Control: no-cache, must-revalidate");
        exit;

    }

    public function delete(){
        $id = $_GET['id'] ?? "";
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $prepare = $this->pdo->prepare($sql);
        $prepare->bindParam(':id',$id);

        $prepare->execute();

        $_SESSION['mensagem'] = "Usuario excluido com sucesso.";
        header("location: \index.php?pagina=list");
   
    }
}

