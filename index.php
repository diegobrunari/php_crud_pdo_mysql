<?php
include_once "conexao.php";

try {
    $consulta = $conectar->query("SELECT * FROM login");

    echo "<a href='formCadastro.php'>Novo Cadastro</a><br><br>Listagem de Usuários";

    echo "<table border='1'><tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";

    while ($dados = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>$dados[nome]</td><td>$dados[login]</td><td><a href='formEditar.php?id=$dados[id]'>Editar</a> - <a href='excluir.php?id=$dados[id]'>Excluir</a></td></tr>";
    }

    echo '</table>';

    echo $consulta->rowCount() . ' registros encontrados';
} catch (PDOException $e) {
    echo $e->getMessage();  
}
?>
