<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 8</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 8</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Propriedades e métodos estáticos</li>
        <li>Acesso direito sem necessidade de objetos/instâncias</li>
        <li>Uso do <code>self</code> para acesso (dentro da classe) aos recursos estáticos</li>
    </ul>
    <hr>

    <h2>Sáida de dados</h2>

<?php 
require_once "src/PessoaFisica.php";
require_once "src/Utilitarios.php";
$cliente1 = new PessoaFisica;

$cliente1->setNome("João");
$cliente1->setIdade(71);

// Usando os recursos estáticos
Utilitarios::obterData();
?>

<h2>Atendimentos do dia: <?=Utilitarios::$dataAtual?></h2>


</body>
</html>