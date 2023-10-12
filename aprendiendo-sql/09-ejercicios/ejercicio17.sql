/* 
 * Obtener un listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'
 */

 SELECT * from encargos WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');
 SELECT * from encargos WHERE cliente_id = (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');

--  Con inner join
SELECT e.id AS 'Encargo', cantidad, c.nombre, co.modelo, e.fecha FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');