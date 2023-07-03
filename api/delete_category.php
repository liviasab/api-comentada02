/* 08 - Agora a parte do CRUD que deleta*/

<?php

require 'conf/init.php';

$id = $_POST['id'];/* Deleto pelo ID*/

$sql = "DELETE FROM categories WHERE `id` = $id";
$pdo->query($sql);

echo json_encode([
    'success' => true
]);
/* Igual no add só que não insere, deleta*/