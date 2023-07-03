/* 01 - Arquivo do diretório conf usado para acessar o banco de dados*/

<?php
/* Configurações específicas de cada banco*/
$host = "127.0.0.1";/* IP local do computador (também conhecido como "localhost").
 Geralmente, você usa esse valor quando o banco de dados está sendo executado na mesma máquina em que
o código está sendo executado.*/
$dbname = "lost_found_tsi";/*O nome do banco de dados é onde as tabelas 
e dados são armazenados e manipulados.*/
$port = 3306;/*  Esta variável indica o número da porta na qual o servidor de
 banco de dados está ouvindo. O valor padrão para o MySQL é 3306(
porém dos computadores do if é 3307)*/
$user = "root";/* nome de usuário utilizado para autenticação no banco de dados.*/
$password = "@40028922maconhA"; /* senha necessária para autenticar o nome de usuário ao se conectar ao banco de dados.(NÃO COMPARTILHE SUA SENHA PUBLICAMENTE)*/


$dsn = "mysql:host=$host;dbname=$dbname;port=$port";/*string de conexão chamada DSN (Data Source Name), 
que é usada para estabelecer uma conexão com um banco de dados MySQL.*/

/*Essa string será usada posteriormente para estabelecer a conexão
com o banco de dados MySQL utilizando uma função ou classe que aceite o DSN como parâmetro, como PDO (PHP Data Objects).*/

$pdo = new PDO($dsn, $user, $password);/* Cria um novo objeto PDO para estabelecer uma conexão com um banco de dados MySQL.
 É uma classe no PHP usada para interagir com bancos de dados por meio da extensão PDO*/


