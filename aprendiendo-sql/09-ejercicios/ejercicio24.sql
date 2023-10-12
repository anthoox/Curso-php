/*
 * Listar los encargos con el nombre del coche, el nombre del cliente y
 * el nombre de la ciudad del cliente pero unicamente cuando sean de Barcelona
 */

 SELECT c.modelo AS 'modelo', cl.nombre AS 'Nombre cliente', cl.ciudad AS 'Ciudad cliente' FROM clientes cl
 INNER JOIN encargos e ON e.cliente_id = cl.id
 INNER JOIN coches c ON c.id = e.coche_id
 WHERE cl.ciudad = 'Barcelona';
 
 SELECT e.id, co.modelo, c.nombre , c.ciudad FROM encargos e
 INNER JOIN coches co ON co.id = e.coche_id
 INNER JOIN clientes c ON c.id = e.cliente_id
 WHERE c.ciudad = 'Barcelona';