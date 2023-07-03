/* 07 - Agora a parte do crud para atualizar uma categoria.*/
<?php

require 'conf/init.php'; 

$id = $_POST['id'];/* Preciso pegar o ID e o name para fazer a 
atualizaçãoda categoria*/
$name = $_POST['name'];

// $sql = "UPDATE categories SET `name` = :name WHERE `id` = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['name' => $name, 'id' => $id]);

/* Durante a aula Ranieri comentou que a maneira não orientada a objetos pode levar 
a vulnerabilidades de segurança, como ataques de injeção de SQL. Portanto, é altamente recomendado usar práticas de segurança,
 como o uso de consultas parametrizadas ou a vinculação de parâmetros, para evitar esses riscos.
 Por isso o uso do $stmt->execute(['name' => $name, 'id' => $id]) que executa a declaração preparada representada pelo objeto $stmt, 
 substituindo os parâmetros com os valores fornecidos no array associativo. 
 Meio que a linha de código executa uma consulta SQL que foi preparada anteriormente.

 É como uma espécie de modelo que você pode preencher com diferentes valores. */


/* Nada que o usuário digita pode ser salvo diretamente no banco, 
é preciso passar por um tratamento, no caso $stmt->execute(['name' => $name, 'id' => $id]);
 */

 $sql = "UPDATE categories SET `name` = '$name' WHERE `id` = $id";
$pdo->query($sql);

echo json_encode([
    'success' => true
]);
/* Igual no add só que não insere, atualiza*/ 

/* Agora é o Front*/