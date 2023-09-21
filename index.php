<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>PHP com POO</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Acesso direito às propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método</li>
    </ul>

<?php 
require_once "src/Cliente.php";

$clienteA = new Cliente;
$clienteB = new Cliente;

// Acesso e atribuição
$clienteA->nome = "Zimbo";
$clienteB->nome = "Aicha";

$clienteA->telefones = ["11-2387-9876", "11-5673-9876"];
$clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);
?>
<hr>

<h2>Dados dos objetos (Acesso e leitura)</h2>
<h3><?=$clienteA->nome?></h3>
<h3><?=$clienteB->nome?></h3>


<pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>