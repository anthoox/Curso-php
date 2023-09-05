<?php
/*
 Mostrar la tabla de multiplicar del 1 al 10 dentro de una tabla HTML
 */

 echo "<table border='1'><tr>";  //inicio tabla
 echo "<tr>"; // inicio tr
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
 echo "</tr>"; // fin tr de la fila 1
 echo "<tr>"; // inicio fila 2
    for($i = 1; $i<= 10; $i++){
        echo '<td>';// inicio contenido columna
            for($x = 1; $x<= 10; $x++){
                echo "$i x $x = " . $i*$x . '<br>';
            }
        echo '</td>'; // fin contenido columna
    }
 echo "</tr>"; // cierre fila 2
 echo "</table>"; // fin tabla
 