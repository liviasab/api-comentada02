/* 02 - Arquivo do diretório conf feito para evitar erros de cors, 
erros de (Cross-Origin Resource Sharing) que ocorrem quando
 uma solicitação feita por um navegador web é bloqueada
devido a restrições de segurança relacionadas à política de mesma origem*/

<?php

header("Access-Control-Allow-Origin: *"); /* especifica quais origens podem acessar o recurso, ou o uso de tokens de autenticação, 
como cookies ou cabeçalhos personalizados.*/
header("Access-Control-Allow-Headers: *");/* Este cabeçalho indica ao navegador que todos os 
cabeçalhos solicitados pelo cliente são permitidos na resposta.
 Ao usar "*", você está permitindo que qualquer cabeçalho seja enviado pelo cliente e seja aceito pelo servidor.*/
header("Access-Control-Allow-Methods: *");/* Este cabeçalho informa ao navegador que todos os métodos de solicitação HTTP (como GET, POST, PUT, DELETE, etc.) 
são permitidos pelo servidor. Da mesma forma que o cabeçalho anterior, usar "*" permite que qualquer método seja aceito.*/

/* É importante notar que os erros de CORS são
 uma medida de segurança vital para proteger os usuários 
 da web contra ataques de origem cruzada. Eles garantem que um site não possa acessar recursos em outros sites sem permissão explícita.*/
 
 /* OBS:. Revisa o que é cada método, seu otário*/