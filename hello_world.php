
<?php
// <!-- debemos iniciar un bloque <?php  -->

// PHP UTILIZA SIEMPRE  PUNTO Y COMA " ; "  
echo "Hola, PHP \n";


// para definir variables utilizamos el signo de dolar $

$myString = "Esto es una cadena de texto";
$myString = "Aqui cambio el valor de una cadena de texto";

echo $myString . "\n";   //echo imprime siempre en la misma linea por lo que deberemos usar saltos de linea \n
echo gettype($myString) . "\n";

$myString = 6;      //tipo dinamico 
echo $myString . "\n";  
echo gettype($myString) . "\n";

$myString = "Esto es una cadena de texto";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$myDouble = 6.5; //si tiene punto decimal los datos seran del tipo double
echo gettype($myDouble) . "\n";
echo $my_int + $myDouble . "\n";
// echo $my_int + $myDouble + $myString . "\n";  //se le dificulta trabajar cpmbinando numeros y strings


$myBool = true;
echo $myBool .  "\n"; //el imprimir un true nos retorna un 1
$myBool = false;
echo $myBool .  "\n"; //el imprimir falsos en consola no se ve nada
echo gettype($myBool) . "\n";

echo "El valor de mi entero es de $my_int y de el mi boolena es $myBool.\n ";  //asi podemos concatenar string con variables


//DEFINIR CONSTANTES


const myConstant = "Valor de la constante.";

echo myConstant . "\n"; //para imprimir constantes no usamos el signo de dolar



//DEFINIR LISTAS

$myArray = [$myString, $my_int, $myDouble];
echo gettype($myArray) . "\n";
echo $myArray[0] . "\n";
array_push($myArray,$myBool );
print_r($myArray);
// echo $myArray[4] . "\n";  //si no existe el elemen to genera un error

// echo $myArray . "\n";

//DICCIONARIOS   

$myDic = array("string" => $myString,"int" => $my_int,"bool" => $myBool );
echo gettype($myDic) . "\n";
print_r($myDic);
echo $myDic["int"] . "\n";


//SET    no existe en php pero tenemos un metodo que encuentra solo los valores no repetidos

array_push($myArray, "Dylan");
array_push($myArray, "Dylan");
print_r($myArray);


print_r(array_unique($myArray));



// FLUJOS


// for
for($index = 0 ; $index <= 10 ; $index++ ) {
    echo $index . "\n";
}


// foreach() iterar en array 
foreach($myArray as $myItem){
    echo $myItem . "\n";
}

$index = 0;

//while
while($index <= sizeof($myArray) - 1 ){
    echo $myArray[$index] . "\n";
    $index++;
}

$my_int = 13;
$myString = "Hola";


//IF ELSE    OPERADORES LOGICOS
if($my_int == 11 && $myString == "Hola"){
    echo "El valor es 11 \n";
} elseif( $my_int == 12 || $myString == "Hola") {
    echo "El valor es 12 \n";
} else {
    echo " El valor no es 11";
}

//FUNCIONES

function printNumber(int $myNumber) {
    echo $myNumber . "\n";
}

printNumber(10);
printNumber(10.2);
printNumber(20);

// crear clases nuevas
class MyClass {
    public $name;
    public $age;
    
    function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }
}

$myPerson = new MyClass("Dylan", 25);
// imprimiendo valores de las clases
print_r($myPerson);
// accediendo al paremtro de la clase
echo $myPerson-> name . "\n";
// modificando el valor de la clase
$myPerson->name = "TryAgain";
echo $myPerson-> name . "\n";

// imprimir el tipo de class nos dara un objeto 
echo gettype($myPerson) . "\n";

// usar learn php para practicar o el manual de php

// <!-- /* y finalizar el bloque php   ? > , la finalizacion del bloque es opcional,  hoy en dia */ -->
?>