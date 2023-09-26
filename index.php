<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
    <style>
        .formart {
            text-align: center;
            list-style: none;
            text-decoration: underline;
        }
        li {font-weight: bold;}
    </style>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Herança (Super Classe e Sub Classe)</li>
        <li>Métodos/propriedades protegidos (acessivéis apenas pela clase em que foram definidos e pelas subclasses)</li>
        <li>Classe Abstrata: Não permite instâncias/objetos, serve apenas de modelo para subclasses</li>
        <li>Classe Final: Não permite herança, ou seja, não aceita a criação de subclasses</li>
        
    </ul>
<?php 
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";


    $clientePF = new PessoaFisica;

    $clientePF->setNome("Amanda");
    $clientePF->setEmail("amanda@gmail.com");
    $clientePF->setIdade(23);
    $clientePF->setCpf("287.789.907-76");

    $clientePJ = new PessoaJuridica;
    $clientePJ->setNome("Beltrano S/A");
    $clientePJ->setEmail("beltrano@gmail.com");
    $clientePJ->setAnoFundacao(2000);
    $clientePJ->setCnpj("32.088.0001/000.41");
    $clientePJ->setNomeFantasia("Bla Bla Bla Informática");


?>



<ul class="formart">
    <h2>Cliente Pessoa Jurídica</h2>
    <li>Nome: <?=$clientePJ->getNome()?></li>
    <li>E-mail: <?=$clientePJ->getEmail()?></li>
    <li>Ano: <?=$clientePJ->getAnoFundacao()?></li>
    <li>CNPJ: <?=$clientePJ->getCnpj()?></li>
    <li>Nome Fantasia: <?=$clientePJ->getNomeFantasia()?></li>
</ul>


<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>



<?php 
require_once "src/MEI.php";

$clienteMei = new MEI;
$clienteMei->setNome("Marina");
$clienteMei->setAnoFundacao(2023);
$clienteMei->setNomeFantasia("Tanaka Emprendimentos");
$clienteMei->setAreaDeAtuacao("Ervas medicinais");


?>

<pre><?=var_dump($clienteMei)?></pre>












<?php
// o erro é devido ao facto da classe Cliente ser uma class abstrata
$clienteGenerico = new Cliente;

?>

<pre><?=var_dump($clienteGenerico)?></pre>
</body>
</html>