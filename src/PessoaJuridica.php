<?php
require_once "Cliente.php";

class PessoaJuridica extends Cliente {
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    

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