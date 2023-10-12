/*
 * Visualizar todos los cargos de los vendedores y el número de los vendedores que estan dentro de ese cargo
 * adicionalmente lo ordenamos por la cantidad de id que hay por cargo
 */

 SELECT count(id) AS numero_vendedores, cargo FROM vendedores GROUP by cargo ORDER by COUNT(id) DESC;