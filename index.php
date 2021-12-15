<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de História</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
  
<body>


<h1>Quiz de História</h1> 
    
    <form method="post" action="registro.php">

        <div>
        <h5>Digite informações sobre você:<h5> 
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" />
        </p>
        
        <p>
            <label for="instituicao">Instituição de ensino:</label>
            <input type="text" name="instituicao" id="instituicao" />
        </p>

        <p>
            <label for="data">Data de nascimento:</label>
            <input type="date" name="data" id="data" />
        </p>
        
        <p> Cidade onde mora: <select name="select"> 
 <option value= "selecione|111">Selecione</option> 
 <option value="canguaretama|222">Canguaretama</option>
 <option value="goianinha|333">Goianinha</option>
 <option value="natal|444">Natal</option>
 <option value= "saojose|555">São José de Mipibu</option>
 <option value="outra|666">Outra</option>
</select>

</p>
</div> 

<h5>Instruções:</h5>
<p>Responda às 3 questões abaixo para testar seus conhecimentos referente a disciplina de história.</>
<p>Obs: A questão 1 vale 40 pontos e as questões 2 e 3 valem 30 pontos!<p/>

<id="questionario" name ="questionario" method = "post" action="resposta.php">
<h2 class="font_1">1) Qual é o nome da primeira cidade sede do governo-geral Brasileiro?</h2>

<label>
<input type="radio" name="questao1" value="a" /> A) Rio de Janeiro</label>
<br />
<label>
<input type="radio" name="questao1" value="b" /> B) Salvador</label>
<br />
<label>
<input type="radio" name="questao1" value="c" /> C) Brasília</label>
<br />
<label>
<br />
 
<h2 class="font_1">2) Em que período ocorreu a Segunda Guerra Mundial?</h2>
 
<label>
<input type="radio" name="questao2" value="a" /> A) De 1820 a 1900</label>
<br />
<label>
<input type="radio" name="questao2" value="b" /> B) De 1924 a 1955</label>
<br />
<label>
<input type="radio" name="questao2" value="c" /> C) De 1939 a 1945</label>
<br />
<br />
 
<h2 class="font_1">3) Com quantos anos Pedro II assumiu o poder do Brasil?</h2>
 
<label>
<input type="radio" name="questao3" value="a" /> A) 14 anos </label>
<br />
<label>
<input type="radio" name="questao3" value="b" /> B) 35 anos </label>
<br />
<label>
<input type="radio" name="questao3" value="c" /> C) 18 anos </label>
<br />
<br />
<input type="submit" name="enviar" id = "enviar" value="Enviar" />
</form>
<body/>
</html>
