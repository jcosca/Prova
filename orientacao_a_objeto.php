<?php
class Paralelepipedo {
    private $profundidade = 2;
    private $largura = 2;
    private $altura = 2;
   
    public function getProfundidade()
    {
        return $this->profundidade;
    }

    public function setProfundidade(float $var = 2)
    {
        $this->profundidade = $var;
    }
   
    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura(float $var = 2)
    {
        $this->largura = $var;
    }
   
    public function getAltura()
    {
        return $this->altura;
    }
    
    public function setAltura(float $var = 2)
    {
        $this->altura = $var;
    }

    function volume() {
        $a = $this->profundidade * $this->largura * $this->altura;
        return $a;
    }
}

$p1 = new Paralelepipedo;

/*
Exemplo de utilização:

$p1 = new Paralelepipedo;
$volume = $p1->volume();

echo $volume;
*/


?>