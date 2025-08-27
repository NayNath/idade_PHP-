<?php

$anoNascimento = filter_input(INPUT_GET,"anoNascimento", FILTER_VALIDATE_INT);

$idade = date("Y") - $anoNascimento;

$mensagemPrincipal ="<p> Senhor(ar) ".$_GET["nome"]."</p>".
                    "<p> Nascido em ".$anoNascimento."</p>".
                    "<p> Você tem ". $idade."</p>";  

if ($idade >=18) {
    $mensagem = " É maior de idade!!";
}
else{
    $mensagem = " É menor de idade!!";
    //$mensagem = "Senhor(ar) "{$_GET["nome"]}", nascido em "{$anoNascimento} ", você tem "{$idade} " é menor de idade";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior ou Menor de idade</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <h1>Você é maior de idade? </h1>
    <div id="valor">
        <?php  
            echo $mensagemPrincipal; 
            echo $mensagem;
        ?>
    </div>
</body>
</html>