<?php class Tablero {

private $celdas; 
public function __construct($arreglo ){
$this->celdas= $arreglo;
    }

public function getCelda (){
    return $this->celdas;
    }

public function setCelda ($arreglo){
    $this-> celdas=$arreglo;
    }
}