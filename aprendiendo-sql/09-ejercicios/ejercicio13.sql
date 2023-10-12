/* 
 * Sacar la media de sueldos entre todos los vendedores por grupo
 */
 SELECT AVG(sueldo), grupo_id FROM vendedores GROUP BY grupo_id;
--  ahora mostrando el nombre del grupo y su ciudad
 SELECT CEIL(AVG(v.sueldo)) AS 'Media salarial', g.nombre, g.ciudad FROM vendedores v
 INNER JOIN grupos g ON  g.id = v.grupo_id
 GROUP BY grupo_id;