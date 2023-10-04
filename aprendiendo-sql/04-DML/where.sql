#CONSULTA CON UNA CONDICIÓN#
SELECT * FROM usuarios WHERE email= 'antho@antho.com';
#TODAS ESTAS CONDICIONES SE PUEDEN USAR EN CONSULTAS PARA BORRAR Y ACTUALIZAR APARTE DEL SELECT#
/*
 OPERADORES DE COMPARACIÓN
 IGUAL      =
 DISTINTO   !=
 MENOR      <
 MAYOR      >
 MENORIGUAL <=
 MAYORIGUAL >=
 BETWEEN    between A and B     (entre A y B)
 EN         in
 Es nulo    is null
 No nulo    is not null
 Como       like
 No es como not like
*/

/*
 OPERADORES LÓGICOS
 O          OR
 Y          AND
 NO         NOT
*/
/*
 COMODINES:
 Cualquier cantidad de carateres:   %
 Un caracter desconocido:           _
 longitud   LENGTH
 limite     LIMIT                   acepta valores que van desde el 0. Se muestra desde el primer valor hasta el anterior del segundo valor
*/
#EJEMPLOS#
-- nombre y apellidos de los usuarios registrados en 2023
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2023;

-- nombre y apellidos de los usuarios que no se registraron en 2023 o tengan fecha nula
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2023 OR ISNULL(fecha);

-- Mostrar el nombre de los usuarios en donde cuyo apellido incluye la letra A dando igual lo que tenga delante o detras
SELECT nombre FROM usuarios WHERE apellidos LIKE '%a%' AND clave= 1234;

-- mostrar todos los registros siempre y cuando el año sea par. Para que sea impar solo poner != 0
SELECT * FROM usuarios WHERE (YEAR(fecha)%2) = 0;

-- Mostrar nombre y apellidos de todos los registros de usuarios cuyo nombre tenga más de 5 letras y además se hayan registrado antes de 2023 y que el nombre este en mayusculas
SELECT UPPER(nombre) AS NOMBRE, apellidos FROM usuarios WHERE (LENGTH(nombre)>5) AND (YEAR(fecha)<2023);

-- Ordenar por apellidos descendente y otra por fecha
SELECT nombre FROM usuarios ORDER BY apellidos DESC;
SELECT nombre FROM usuarios ORDER BY fecha;

-- La misma consultas anteriores pero usando la clausala limit
SELECT nombre FROM usuarios ORDER BY fecha LIMIT 1;
SELECT nombre FROM usuarios ORDER BY fecha LIMIT 0,2; 