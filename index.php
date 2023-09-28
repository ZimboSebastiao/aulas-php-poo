<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 7</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Polimorfismp</li>
        <li>Sobreposição de métodos</li>
        <li>Uso do <code>parent</code> para acessar superClasse</li>
    </ul>
    <hr>

    <h2>Sáida de dados</h2>


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
    <section><?=$clientePF->exibirDados()?></section>
    <section><?=$clientePJ->exibirDados()?></section>








</body>
</html>