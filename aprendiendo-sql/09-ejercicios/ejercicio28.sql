/*
 * Listar los vendedores y todos los clientes que tengan. Tengan o no clientes.
 * Además, mostrar el número de clientes.
 */

 SELECT v.nombre, v.apellidos, COUNT(cl.id) FROM vendedores v
 LEFT JOIN clientes cl ON cl.vendedor_id = v.id
 GROUP BY v.id;