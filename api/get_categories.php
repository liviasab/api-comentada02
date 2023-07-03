/* 05 - Fora da pasta conf começamos a fazer a api.
get_categories é a parte do crud que vai retornar o que tem no guardado no banco. O estado atual*/

<?php

require 'conf/init.php'; /* Importamos para ter acesso ao banco e não ter erro de cors*/

$sql = "SELECT * FROM categories";/* Selecionando as informações da tabela categorias do banco de dados*/
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);/*Essa linha de código executa uma consulta SQL no
banco de dados usando o objeto PDO e armazena o resultado em uma variável chamada $data.*/

/*$pdo: É o objeto PDO que representa a conexão com o banco de dados MySQL, 
criado anteriormente usando a linha de código $pdo = new PDO($dsn, $user, $password);.*/

/*query($sql): É um método do objeto PDO que executa uma consulta SQL no banco de dados. 
Recebe como parâmetro a string contendo o SQL a ser executado. 
A variável $sql deve conter a consulta SQL desejada.*/

/*fetchAll(PDO::FETCH_ASSOC): É um método chamado após o query() que retorna todas
 as linhas do resultado da consulta como um array associativo. PDO::FETCH_ASSOC 
 é uma constante que define o modo como os dados são retornados. Neste caso, 
 FETCH_ASSOC indica que o array deve ser indexado pelos nomes das colunas do resultado.
Onde cada elemento do array corresponde a uma linha do resultado e as chaves são os nomes das colunas.*/



echo json_encode($data, JSON_PRETTY_PRINT); /* Essa linha de código PHP 
converte o array $data em uma string JSON formatada e a exibe no navegador.
Isso é comumente usado para retornar dados em formato JSON em uma API ou para
exibir resultados de consultas de banco de dados em um formato legível para os usuários.*/

/*json_encode($data): É uma função do PHP que converte um valor (nesse caso, o array $data) 
em uma string JSON. A função json_encode() recebe o valor a ser convertido como o primeiro parâmetro e retorna a string JSON resultante.*/

/*JSON_PRETTY_PRINT: É uma constante do PHP usada como opção para json_encode(). 
Nesse caso, JSON_PRETTY_PRINT é usado para formatar a string JSON resultante com espaços em branco e recuos, 
tornando-a mais legível e organizada. Essa opção é útil especialmente para depuração e exibição amigável dos dados JSON.*/

/*echo: É uma instrução do PHP que exibe o valor ou a string especificada no navegador. 
Nesse caso, a função json_encode() retorna a string JSON formatada, e a instrução echo exibe essa string no navegador.*/

