/* 06 - Agora vamos para parte do crud que adiciona categorias no banco*/ 

<?php

require 'conf/init.php';/* Mesmo processo para não dar erro...*/

$name = $_POST['name'];/*Lê o texto de Ranieri https://dev.to/ranierivalenca*/

$sql = "INSERT INTO categories (`name`) VALUES ('$name')"; /* essa linha de código constrói uma 
instrução SQL para inserir um valor específico na coluna "name" da tabela "categories"*/

$pdo->query($sql);
echo json_encode([
    'success' => true
]); /* Vai consultar o banco para saber se a inserção usando o objeto $pdo e, 
em seguida, retornam uma resposta JSON indicando o sucesso da operação.*/