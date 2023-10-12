/*
 * Obtener los vendedores con dos o más clientes
 */

SELECT v.nombre, v.apellidos FROM vendedores v
INNER JOIN clientes cl ON cl.vendedor_id = v.id
GROUP BY v.id HAVING COUNT(v.id)>=2;

SELECT * FROM vendedores WHERE id IN 
    (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);