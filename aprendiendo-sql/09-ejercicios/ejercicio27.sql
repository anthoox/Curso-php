/*
 * Mostrar los nombres de los clientes y la cantidad de encargos realizados
 * incluyendo los que no hayan realizado encargos.
 */


 SELECT cl.nombre, COUNT(e.cantidad) FROM clientes cl 
 INNER JOIN encargos e ON e.cliente_id = cl.id
 GROUP BY cl.nombre;

 SELECT c.id, c.nombre, COUNT(e.id) FROM clientes c
 LEFT JOIN encargos e ON c.id = e.cliente_id
 GROUP BY 1;

 INSERT INTO clientes VALUE(null, 1,'Tienda organica INC', 'Murcia', 0, CURDATE() );