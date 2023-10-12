/*
 * Visualizar todos los coches en cuya marca exista la letra "A" y cuyo modelo empiece por F
 */
 SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';

--  la siguiente es por probar
 SELECT * FROM coches WHERE marca LIKE '%a%' OR modelo LIKE 'F%';