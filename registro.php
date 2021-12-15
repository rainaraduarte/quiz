<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Recebimento de Dados</title>
    
 <style type:"text/css">
 body {
   background-color: pink; 
 }
 
 </style>
</head>
<body>
    <?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
  
echo "<h4>Dados:</h4>"; 
echo "Nome:";
echo $_POST["nome"]; 
echo "<br/>";

echo "Instituição:";
echo $_POST["instituicao"]; 
echo "<br/>";

echo "Data de nascimento:";
$string = $_POST["data"]; 
$data= date_create_from_format('Y-m-d', $string);
echo $data -> format('d-m-y');
echo "<br/>";

echo "Cidade:";
$pega = explode('|',$_POST['select']);

$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];

echo "<h4>Suas respostas:</h4><br>";
echo "Questao 1 = ".$questao1."<br>";
echo "Questao 2 = ".$questao2."<br>";
echo "Questao 3 = ".$questao3."<br>";


$resposta1 = "b";
$resposta2 = "c";
$resposta3 = "a";
 
 
$acertos = 0;
$erros = 0;
$pontuacao=0; 
$nota1=0;
$nota2=0;
$nota3=0; 

echo "<h4>Resultado:</h4><br>"; 

if ($questao1 == $resposta1){
$acertos++; $nota1=40; 
echo "<p>Questao 1: Parabéns! Você acertou!</p><br>";
}
else { $erros++;
  echo "<p>Questao 1: Você errou! A resposta correta é a letra $resposta1.</p><br>";
}


if ($questao2 == $resposta2){
  $acertos++; $nota2=30; 
echo "<p>Questao 2: Parabéns! Você acertou!</p><br>";
}
else { $erros++; 
echo "<p>Questao 2: Você errou! A resposta correta é a letra $resposta2.</p><br>";
}

if ($questao3 == $resposta3) {
  $acertos++; $nota3=30;
echo "<p>Questao 3: Parabéns! Você acertou!</p><br>";
}
else { $erros++; 
 echo "<p>Questao 3: Você errou! A resposta correta é a letra $resposta3.</p><br>";
}
$pontuacao= $nota1+$nota2+$nota3; 

echo "Você acertou $acertos e errou $erros, marcando um total de $pontuacao pontos!"
?>
</body>
</html>
