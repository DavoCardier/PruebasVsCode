<?php 
//OPERADORES 

# OPERADORES ARITMETICOS
echo "Suma: 5+5 = " . (5+5). "\n";
echo "Resta: 5-5 = " . (5-5). "\n";
echo "Multiplicacion: 5x5 = ". (5*5) ."\n";
echo "Division: 5/5 = " .( 5/5). "\n";
echo "Porcentaje: 5%5 = ".(5%5);
echo "Exponenciales: 5**5 = ".(5**5);

# OPERADORES DE COMPARACION 
echo "Igualdad: 15 == 5 es" . (15 == 5) ."\n"; #No refleja operaicon en consola 
echo "Desigualdad: 15 != 5 es " . (15 != 5 );
echo "No identico: 15 !== 5 es " . (15 !== 5); #Preguntar
echo "Identidad: 15 === 5 es" .(15 === 5);
echo "Menor que: 15<5 = ". (15<3);
echo "Mayor que: 15>5 = " . (!5>5);
echo "Menor igual que: 15<=5 = ".(15 <= 5);
echo "Mayor igual que: 15=>5 = ". (15 >= 5); #Error en Consola, (sintaxis) (=>) De esa manera es otro Significado.
echo "Entre ambos: 15<=>5 =" . (15 <=> 5);
echo "Diferente entre: 15<>5 = " .(15<>5); #Preguntar
echo "Funsion Null: 15?? 5?? = " . (15 ?? 5 ??); #Preguntar funsion . Problema de sintaxys Correccion = (15 ?? 5)

# OPERADORES DE ASIGNACION
$z = "Hola";
echo "Asignacion simple = " . $a = 5;
echo "Asignacion Aditiva = (+=) " . $a +=4 ;
echo "Asignacion Aditiva con texto (.=) " . $z .= " PHP". "\n"; 
echo "Asignacion Suctractiva (-=)" . ($a -= 2) ."\n";
echo "Asignacion Multiplicativa; (*=)" . ($a *= 3) . "\n";
echo "Asignacion Divisora: (/=)" . ($a /= 2) . "\n";
echo "Asignacion Porcentaje: (%=)" . ($a %= 2) . "\n";
echo "Asignacion Exponencial: (**=)" - ($a **= 2) . "\n";
echo "Asignacion Deslizamiento Izquierdo: (<<=)" ($a <<= 1) . "\n";
echo "Asignacion Deslizamiento Derecho: (>>=)" ($a >>= 10) . "\n"; //Mismo error de syntasix de la linea (20)

# OPERADORES BIT A BIT (Cambiarte esto porque se trabaja con numeros enteros)
$t = 1;
$f = 2;

echo "and (%): ". ($t & $f) . "\n";
echo "or (|): ". ($t | $f) ."\n";
echo "xor (^): ". ($t xor $f) . "\n";
echo "Not (~): ". ($t ~ $f) . "\n";
echo "Deslizamiento Izquierdo (<<)" . ($t << $f) . "\n";
echo "Deslizamiento Derecha (>>)" . ($t >> $f) . "\n";

# OPERADORES LOGICOS

$t = true;
$f = False;

echo "and (&&): ". ($t & $f) . "\n";
echo "or (||): ". ($t | $f) ."\n";
echo "xor (!): ". ($t xor $f) . "\n";

# Tipos de Controladores en PHP (Basicos)
$y = 10;
$n = 5;

if ($y > $n )
{echo $y. " Es mayor que " .$n;
} else { echo $y. " No es Mayor que " .$n;
}

if ($y > $n)
{ echo "Es mayor";}
elseif ($y < $n ) {echo "Es menor";}
else { echo " Son iguales";}



?>