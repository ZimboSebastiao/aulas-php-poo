<?php 

class Cliente{
    // Propriedades (ou atributos)
    public string $nome;
    public string $email; 
    public array $telefones;
    public string $senha;

    // Método Construtor - Permite configurar a forma de inicialização do objeto, exigindo a atribuição de dados no momento de criar objeto/instância. O construtor é sempre chamado de forma automática assim que o objeto é criado.

    public function __construct(string $nome, string $email, array $telefones) {
        // Atribuindo os valores dos parâmetros às propriedades da classe Cliente. Usamos o $this para acessar as propriedades dessa classe
        $this->nome = $nome;
        $this->email = $email;
        $this->telefones = $telefones;
    }

}



?>