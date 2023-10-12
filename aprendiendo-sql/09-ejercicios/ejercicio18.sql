/*
 * Listar los clientes que han hecho algún encargo del coche 'Mercedes Ranchera'
 */

 SELECT cl.nombre FROM clientes cl
 INNER JOIN encargos e ON e.cliente_id =  cl.id
 INNER JOIN coches ch ON ch.id = e.coche_id
 HAVING COUNT(e.coche_id) >= 1;

 SELECT * FROM clientes WHERE id IN
 (SELECT cliente_id FROM encargos WHERE coche_id 
    IN (SELECT id FROM coches WHERE modelo = 'Mercedes Ranchera'));