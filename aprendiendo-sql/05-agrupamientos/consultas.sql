#CONSULTAS DE AGRUPAMIENTO#
SELECT COUNT(titulo) AS 'NUMERO_DE_ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;
/*
 cuando hacemos consulta de agrupamiento no es bueno usar un WHERE, porque WHERE actua sobre una columna
 Si queremos hacer una condición en una consulta de agrupamiento usamos HAVING
*/

-- Muestra los agrupamientos mayores o igual a 4, es decir, los agrupamientos que tiene más o igual de 4 elementos
SELECT COUNT(titulo) AS 'NUMERO_DE_ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>=4;

/*
 Sacar la media                     AVG
 Contar el numero de elementos      COUNT
 Valor máx del grupo                MAX
 Valor minimo del grupo             MIN
 Sumar todo el contenido del grupo  SUM
*/

-- Sacar media de todos los IDs que hay, para saber cuantas entradas hay de cada tipo. En este caso lo que hace es sumar el valor de todos los ids y saca la media.
SELECT AVG(id) AS 'Media de entradas' FROM entradas;

-- Muestra el titulo del id más alto de la tabla entradas
SELECT MAX(id) as 'Maximo ID', titulo FROM entradas;

-- Muestra el titulo del id más bajo de la tabla entradas
SELECT MIN(id) as 'Maximo ID', titulo FROM entradas;

-- Muestra la suma de todos los ids de la tabla entradas. Pongo titulo al lado para comprobar que solo muestra un titulo, no aporta nada ponerlo.
SELECT SUM(id) as 'Suma total de los ids', titulo FROM entradas;