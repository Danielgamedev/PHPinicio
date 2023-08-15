<?php
include 'includes/header (1).php';
class Numero{

    private $numero;

    //constructores
    public function _construct(){
        $this-> numero = 0;
    }

    public function setNumero($nro=0){
        return $this->numero = $nro;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function MostrarNumerosPares ($cantidad = 0){
        for ($i = 0; $i < $cantidad; $i++){
            if($i%2==0){
                echo '<p class="colores" >'. $i . '</p>';           
             }
        }
        $this->setNumero($cantidad/2);
        echo "La cantidad de nros pares es: ".$this -> getNumero();
        echo '<br>';
    }

    public function MostrarNumerosImpares ($cantidad = 0){
        $contador =0;
        for ($i = 0; $i < $cantidad; $i++){
            if($i%2==1){
                echo '<p class="colores" >'. $i . '</p>';
                $contador= $contador+1;
            }
        }
        $this->setNumero($contador);
        echo "La cantidad de nros pares es: ".$this -> getNumero();
        echo '<br>';
    }

}

$misNumeros = new Numero();
$misNumeros->MostrarNumerosPares(20);
$misNumeros->MostrarNumerosImpares(15);

?>

