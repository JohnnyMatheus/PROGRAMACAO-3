<?php
class Veiculo{
    private String $marca;
    private String $modelo;
    private int $ano;

    public function __construct($marca,$modelo,$ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibir(){
        echo "Marca = ".$this->marca. "</br>";
        echo "Modelo = ".$this->modelo. " </br>";
        echo "Ano = ".$this->ano." </br>";
    }   
public function setMarca(string $marca): void {
    $this->marca = $marca;
}

public function getMarca(){
    return $this->marca;
}

public function setModelo(string $modelo): void {
    $this->modelo = $modelo;
}
public function getModelo(){
    return $this->modelo;
}

public function setAno(int $ano): void {
    $this->ano = $ano;
}

public function getAno(){
    return $this->ano;
}

}
$carro = new Veiculo("Honda","Honda city",2016);
echo $carro->exibir();



?>