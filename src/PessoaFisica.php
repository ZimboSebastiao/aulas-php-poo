<?php 

class PessoaFisica {
    private int $idade;
    private string $cpf; 

    // Getters e Setters - IDADE
    public function getIdade(): int
    {
        return $this->idade;
    }


    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    // Getters e Setters - CPF
    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}



?>