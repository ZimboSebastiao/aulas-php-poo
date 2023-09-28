<?php 

abstract class Cliente{
    // Propriedades (ou atributos)
    private string $nome;
    private string $email; 
    private string $senha;
    private string $situacao = "À definir!";

    public function exibirDados():void {
        echo "<h3> Método exibirDados - Classe Cliente </h3>";

        echo "<h4> $this->nome </h4>";// ou
        echo "<h4>".$this->getNome() ."</h4>";
        
        echo "<p>Situação: $this->situacao</p>";

    }

    // Métodos getters e setters

    public function setNome(string $nome):void {
        $this->nome = $nome;
    }

    public function getNome():string {
        return $this->nome;
    }

    public function setEmail(string $email){
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getSenha():string{
        return $this->senha;
    }


    // Visibilidade Protected: Estes getters e setters poderão ser uados APENAS aqui (class Cliente) e nas subClasses (PessoaFisica e PessoaJuridica)
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    protected function setSituacao(string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }
}


?>