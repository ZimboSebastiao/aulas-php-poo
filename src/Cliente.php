<?php 

class Cliente{
    // Propriedades (ou atributos)
    public string $nome;
    public string $email = "Não informado!";
    public array $telefones;
    public string $senha;

    // Métodos (ou comportamentos)

    public function exibirdados():void {
        echo "<section>";
        echo "<h2> $this->nome </h2>";
        echo "<p> $this->email </p>";
        echo "</section>";


    }

}



?>