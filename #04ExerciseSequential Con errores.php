<?php
ini_set('declare(strict_types', '1'); 
#         ERRORES QUE TUVE QUE CORREGIR EN LA PRACTICA 

#El principal, todo lo tenia en español. 

function calcularImpuesto($precioBase, $elImpuesto): float
{  
   $totalImpuesto = $precioBase * ($elImpuesto / 100);
    return $precioBase + $totalImpuesto;

 
}

function calcularDescuento($precioBase, $elDescuento): float
{  /* Cuando realice (Function calcularTotal), tuve que unificar y simplificar las lineas 15-16
    lo mismo con la linea 9-10 */
    $totalDescuento = $precioBase * ($elDescuento / 100); 
    return $precioBase - $totalDescuento;
    
}

function calcularTotal($precioBase, $impuesto, $descuento): float 
/*Tenia un error tonto con una Variable como se puede ver en la linea 20, al momento de llamarlas
estas lineas venian sin Valor, ya que el valor asignado en la linea de (echo (CalcularImpuesto(x, x, x))); 
no los tomaba en cuento y no los subia las otras funciones*/
{
    $impuesto = calcularImpuesto($precioBase, $elImpuesto);
    $descuento = calcularDescuento($precioBase, $elDescuento);
    return $precioBase - $descuento + $impuesto;
}

echo "El total a pagar es de: " . calcularImpuesto(12.2,15.5,15.2) . " BsD";

?>