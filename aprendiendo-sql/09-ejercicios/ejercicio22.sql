/*
 * Mostrar listado de clientes mostrando el numero de cliente y el nombre
 * mostrar tambien el número del vendedor y su nombre
 */

 SELECT cl.id AS 'numero cliente', cl.nombre AS 'nombre cliente',v.id AS 'id_vendedor' , CONCAT(v.nombre, ' ', v.apellidos) AS 'Nombre vendedor' FROM clientes cl
 INNER JOIN vendedores v ON v.id = cl.vendedor_id;

  SELECT cl.id AS 'numero cliente', cl.nombre AS 'nombre cliente',v.id AS 'id_vendedor' , CONCAT(v.nombre, ' ', v.apellidos) 
  FROM clientes cl, vendedores v
  WHERE cl.vendedor_id = v.id;