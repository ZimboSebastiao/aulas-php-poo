<?php
namespace Zimbo;


class PessoaJuridica extends Cliente {
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    // Construtor 
    public function __construct()
    {
        // Acessando o método setter PROTEGIDO (existente em Cliente)
       $this->setSituacao("Em análise");
    }


    public function exibirDados(): void{
        // parent::recursos
        // Permite o acesso aos recursos da classe pai (superClasse)
        parent::exibirDados();
        echo "<p>Nome fantasia: $this->nomeFantasia</p>";
    }

    // Getters Setters - anoFundacao
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }


    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }


    // Getters Setters - cnpj
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }


    // Getters Setters - nomeFantasia
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }


    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}


?>