/*
 *Visualizar el nombre y apellidos de los vendedores en una misma columna y
 *su fecha de registro y que día de la semana era cuando se registraron
 */

 SELECT CONCAT(nombre, ' ',apellidos) AS 'nombre y apellidos', fecha_alta AS registro, DAYNAME(fecha_alta) FROM vendedores;
 