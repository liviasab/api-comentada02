/* 03 - Arquivo do diretório conf que faz um o "require" 
(usado para importar módulos ou bibliotecas externas,
permitindo que o programador aproveite o código já escrito 
por outras pessoas ou partes presentes em outras partes do arquivo.) 
para os arquivos "database.php" e "cors.php"*/ 

<?php

require 'database.php'; /* Para acessar as configurações do banco*/
require 'cors.php'; /* Para acessar as configurações de cabeçalho*/