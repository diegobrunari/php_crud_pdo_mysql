<?php

try {
    
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");
} catch (PDOException $e) {
    echo "Falha ao conectar com o banco de dados" . $e->getMessage();
}


    //   entra no localhost/phpmyadmin/ e cria um novo banco de dados com o nome pdo
    //   nesse banco criamos uma tabela com o nome 'login' que possui
    //   id
    //   nome 
    //   login

    // faz conexão com o banco de dados
    // localhost/pdo/conexao.php para verificar se está conectando ao banco