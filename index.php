<?php

echo("Clase 4 bucles, arreglos y funciones");
echo("<br>");

//array indexado
$arreglo=array("Juan","María","James","Sandra");
print_r($arreglo);
echo("<br>...........................");

//array asociativo

$arreglo=array('usuario1'=>"Juan",'usuario2'=>"María",'usuario3'=>"James",'usuario4'=>"Sandra");
echo("<br>");
print_r($arreglo);
echo("<br>...........................");

//tamaño de arreglo
$tamano=count($arreglo);
echo("<br>");
echo ("El tamaño de nuestro arreglo es:".$tamano);
echo("<br>...........................");

//Bucle for (me sirve para cjones indexados)

for($centinela=0; $centinela<=10; $centinela++){

    echo("<br>El valor de centinela es: ".$centinela."<br>");
}

//bucle for para recorrer arreglos (me sirve para cjones indexados)
echo("<br>...........................");
$arreglo=array("Juan","María","James","Sandra");
for($centinela=0;$centinela<count($arreglo);$centinela++){

    echo("<br>".$arreglo[$centinela]."<br>");
}

    //Bucle foreach para recorrer arreglos

echo("<br>...........................");
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"María",'usuario3'=>"James",'usuario4'=>"Sandra");
echo("<br>");
foreach($arreglo as $clave=>$valor){
    echo"<br>"."La clave es: ".$clave."<br>";
    echo"<br>".$valor."<br>";

}


// bucle foreach para arreglo indexado
echo("<br>...........................");
$arreglo=array("Juan","María","James","Sandra");
foreach($arreglo as $valor){
  echo "<br> El valor del cajon es: ".$valor;
}

echo("<br>...........................");
$arreglo=array("Juan","María","James","Sandra");
foreach($arreglo as $clave=>$valor){

    echo"<br>"."La clave del cajon es: ".$clave;
    echo"<br>"."El valor del cajon es: ".$valor;
}

// Arreglo multidimensional (arreglo de arreglo)
$usuarios=array(
    'usuario1'=>array('nombre'=>"Juan",'edad'=>30,'sexo'=>"Masculino"),
    'usuario2'=>array('nombre'=>"María",'edad'=>25,'sexo'=>"Femenino"),
    'usuario3'=>array('nombre'=>"James",'edad'=>28,'sexo'=>"Masculino"),
     'usuario2'=>array('nombre'=>"Sandra",'edad'=>32,'sexo'=>"Femenino")
);

?>