<?php
$mensagem = $_POST['mensagem'];
$arquivo = fopen("teste.txt",'w');
fwrite($arquivo,$mensagem);
fclose($arquivo);
header("Location: index.php");
?>