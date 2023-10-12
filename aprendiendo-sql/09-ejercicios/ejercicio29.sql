/*
 * Crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo que se llame
 * Vendedores A
 */

 CREATE VIEW VENDEDORES_A AS
 SELECT * from vendedores WHERE grupo_id IN (
    SELECT id FROM grupos WHERE nombre = 'Vendedores A'
 );