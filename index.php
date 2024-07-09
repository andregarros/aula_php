<?php //iniciar php
echo "Hello world"; //o echo recebe aspas,parentestes,html
echo "<b> olá Mundo </b>"; //para executar o codgido usa-se ; no final
$nome = "andre";
$nome2 = "gustavo";
$idade = 20;
echo "$nome tem $idade <br>"; // para concatenar usa-se o .
echo "<br>";
echo  "o nome 2 é $nome\n" ; 
echo "<br>";
echo strlen($nome); //tamanho da array
echo "<br>";
var_dump($nome);//olhar o que tem na variavel
echo "<br>";
$nome_int = (int)$nome; //tranforma em numero, string, numero inteiro
echo "<br>";
echo rand(0,10);//pega um numero aleatorio
echo "<br>";
$frutas = array('maçã','goiaba','banana');
foreach($frutas as $elemento ){
    echo "$elemento <br>";
}
echo "<br>";
$idade = array("pedro"=>18, "magno"=>40);
echo $idade["magno"];
echo "<br>";
foreach($idade as $nome=>$idade){
    echo "$nome tem $idade anos <br>";
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
</body>
</html>