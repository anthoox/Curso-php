/*
 * Mostrar los dos clientes que mas pedidos han hecho y mostrar cuantos hicieron
 */


SELECT cliente_id, COUNT(id) FROM encargos 
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2 ;
-- asi eleige la columna dos con el order by 2
-- Esta contando la cantidad de veces que sale el cliente, no la cantidad de coches comprados.


SELECT c.id, c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2 ;
