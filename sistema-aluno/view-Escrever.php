<?php  
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include_once('escreverArquivoArray.php'); 
$pessoas = array( 
"000.000.000.01" => array( 
"nome" => "Thanos Gates", 
"endereco" => "Rua Manuel Viana, 200", 

"telefone" => "(77)3422-2829", 
), 
"000.000.000.02" => array( 
    "nome" => "Cananda Gates", 
    "endereco" => "Rua Zeca Carlos Rodrigues, 2064", 
    "telefone" => "(77)4349-0214", 
) );  
escreverArquivoArray($pessoas); 

?> 