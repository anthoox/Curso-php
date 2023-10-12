/*
 * Obtener los nombres y cuidades de los clientes con encargos de 3 unidades(cantidad) en adelante
 */

 SELECT nombre, ciudad FROM clientes WHERE id IN 
     (SELECT cliente_id FROM encargos WHERE cantidad>=3);