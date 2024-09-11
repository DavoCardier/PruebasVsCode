<?php
ini_set('declare(strict_types', '1'); 
//Colocar para tener buenas practicas

/*Ejercicio Secuencial 4: Cálculo de impuestos y descuentos

Desarrolla un programa que calcule el total a pagar por un producto, aplicando impuestos y descuentos. 
Todas las funciones deben trabajar juntas para hacer el cálculo completo.

1.-Función calcularImpuesto: Recibe un precio base y un porcentaje de impuesto, 
y devuelve el precio con el impuesto aplicado.

2.-Función calcularDescuento: Recibe un precio base y un porcentaje de descuento,
 y devuelve el precio con el descuento aplicado.

3.-Función calcularTotal: Recibe el precio base, el porcentaje de impuesto
 y el porcentaje de descuento, llama a las funciones anteriores,
 y devuelve el precio total a pagar.

Crea una función principal que pida al usuario el precio base, el porcentaje de impuesto 
y el porcentaje de descuento, 
y luego muestre el total a pagar usando las funciones anteriores.*/


function calculatePercentage($basePrice, $theTax): float
{  
   return $basePrice * ($theTax / 100);
 
}

function calculateDiscount($basePrice, $theDiscount): float
{  
    return $basePrice * ($theDiscount / 100 );
    
}

function calculateTotal($basePrice, $theTax, $theDiscount): float
{
    $tax = calculatePercentage($basePrice, $theTax);
    $discount = calculateDiscount($basePrice, $theDiscount);
    return $basePrice - $discount + $tax;
}

echo "El total a pagar es de: " . calculateTotal(12.2,15.5,15.2) . " BsD";

/*Crea una función principal que pida al usuario el precio base, Esto no lo realice ya que las referencias
encontre en mi investigacion usaban funciones que aun no hemos trabajado, sin emabrgo aqui puedo anexar un 
codigo de referencia que encontre

Para pregunatar al usuario usaban algo asi... floatval(trim(fgets(STDIN))) 


*/

?>