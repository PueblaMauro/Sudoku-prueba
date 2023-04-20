
<?php 
require_once './tablero.php';
echo "hola mundo";echo "<br>";

$arreglo=(array(1,2,3));

$tablero = new Tablero($arreglo);

echo $tablero->getCelda()[0];

for ($i=0; $i<3;$i++){

    echo $tablero->getCelda()[$i];
    echo "<br>";
    }

?>