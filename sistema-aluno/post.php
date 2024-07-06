<?php  
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include_once ("exemplo-post-dados.php"); 
if( !empty($_POST['form_submit']) ) { 
obterDados($_POST); 
} 
?>  

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>exemplo-post</title> 
</head> 
<body> 
<form style="background-color:yellow" class="form" method="post" action="exemplo
post.php"> 
<p> FORMULÁRIO EXEMPLO POST</p> 
<p> cpf: <input type="text" name="cpf" /> </p> 
<p> nome: <input type="text" name="nome" /> </p> 
<input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
<br><br> 
<button type="submit" class="btn">  
<b>Obter Dados Post</b> 
</button> 
</body> 
</html> 