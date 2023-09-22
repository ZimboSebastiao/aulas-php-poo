<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Método construtor com atribuição obrigatória de valores aos parâmetros/propriedades do objeto</li>
        <li>Uso do <code>$this</code> para acesso às propriedades dentro do objeto</li>
    </ul>

<?php 
require_once "src/Cliente.php";
// Chamando o construtor através da classe Cliente
$clienteA = new Cliente("Fulano", "fulano@gmail.com", ["11-6845-8678"]);
$clienteB = new Cliente("Ozzy", "ozzy@gmail.com", ["11-6894-8678"]);

//$clienteA->telefones = ["11-5464-4667"];

?>
<pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>