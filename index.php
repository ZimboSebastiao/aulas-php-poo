<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Namespaces: agrupamento de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespaces</code> e <code>alias</code></li>
        
        
    </ul>
    <hr>

<?php 
// Só de fazer o require/importação das classes (SEM NAMESPACES), já dá erro no servidor devido a terem o mesmo nome

use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

// Forma 1 de usar classe com namespaces
// $pagamentoFornecedor = new Fornecedor\Pagamento;
// $pagamentoPrestadordor = new Prestador\Pagamento;

// Forma 2 de usar classe com namespaces
// use Fornecedor\Pagamento;
// use Prestador\Pagamento as PrestadorPagamento;

// $pagamentoFornecedor = new Pagamento;
// $pagamentoPrestadordor = new PrestadorPagamento; // Objeto através do alias

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestadordor = new PrestadorPagamento;

?>

<!-- Exercício -->

<?php 
// use Zimbo\PessoaFisica;
// use Zimbo\PessoaJuridica;
// use Zimbo\MEI;

// Use com uma lista de classe
use Zimbo\{MEI, PessoaFisica, PessoaJuridica};

require_once "src/MEI.php";
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";

$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;
$clienteMei = new MEI;

$clientePF->setNome("Jorge Camargo");
$clientePF->setEmail("jorgecamargo@gmail.com");

$clientePJ->setNome("Vanessa Camargo");
$clientePJ->setEmail("vanessacamargo@gmail.com");

$clienteMei->setNome("Ana Camargo");
$clienteMei->setEmail("anacamargo@gmail.com");
$clienteMei->setAreaDeAtuacao("Analista de Qualidade");



?>
<h2>Pessoa Física</h2>
<h4><?=$clientePF->getNome()?></h4>
<p><?=$clientePF->getEmail()?></p>
<hr>

<h2>Pessoa Jurídica</h2>
<h4><?=$clientePJ->getNome()?></h4>
<p><?=$clientePJ->getEmail()?></p>
<hr>

<h2>MEI</h2>
<h4><?=$clienteMei->getNome()?></h4>
<p><?=$clienteMei->getEmail()?></p>
<p><?=$clienteMei->getAreaDeAtuacao()?></p>
<hr>

<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>
<pre><?=var_dump($clienteMei)?></pre>




</body>
</html>