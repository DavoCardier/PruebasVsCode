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


function calcularImpuesto($precioBase, $elImpuesto): float
{  
   $totalImpuesto = $precioBase * ($elImpuesto / 100);
    return $precioBase + $totalImpuesto;

 
}

/*function calcularDescuento($precioBase, $elDescuento): float
{  
    return $precioBase * ($elDescuento / 100 );
    
}

function calcularTotal($precioBase, $elImpuesto, $elDescuento): float
{
    $impuesto = calcularImpuesto($precioBase, $elImpuesto);
    $descuento = calcularDescuento($precioBase, $elDescuento);
    return $precioBase - $descuento + $impuesto;
}
*/
echo "El total a pagar es de: " . calcularImpuesto(12.2,15.5,15.2) . " BsD";

?>