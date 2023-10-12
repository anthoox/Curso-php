/*
 * Mostrar los datos del vendedor con más antiguedad en el concesionario
 */

 SELECT * FROM vendedores ORDER BY fecha_alta LIMIT 1;

/*
 * Obtener los datos de los coches con más unidades vendidas
 */
 SELECT * FROM coches WHERE id = (
    SELECT coche_id FROM encargos ORDER BY cantidad DESC LIMIT 1
 );
  
 SELECT * FROM coches WHERE id IN (
    SELECT coche_id FROM encargos WHERE cantidad IN (
        SELECT MAX(cantidad) FROM encargos
    )
 );
  