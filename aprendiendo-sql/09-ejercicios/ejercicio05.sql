/*
 * Listar los nombres de los trabajadores y los dias que lleva registrado en
 * en el concesionario.
 */

 SELECT nombre, DATEDIFF(CURDATE(), fecha_alta) AS dias_trabajados FROM vendedores;