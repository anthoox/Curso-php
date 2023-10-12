/*
 * Visualizar los apellidos de los vendedores, su fecha de alta y su número de grupo ordenado
 * por fecha descendente y limitarlo o mostrar los cuatro ultimos que se han registrado.
 */

 SELECT apellidos, fecha_alta, grupo_id FROM vendedores ORDER BY fecha_alta DESC LIMIT 4;