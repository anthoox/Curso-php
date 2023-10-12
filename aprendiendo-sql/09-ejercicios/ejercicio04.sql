/*
 * Sacar a todos los vendedores cuya alta sea posterior al 1 de julio de 2018
 */
--  UPDATE vendedores SET fecha_alta='2018-05-25' WHERE id=8;  --esto para que funcion
 SELECT * FROM vendedores WHERE fecha_alta >= '2018-06-1';
 