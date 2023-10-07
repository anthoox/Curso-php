/*
 Una vista, es una consulta almacenada de la base de datos que se utiliza
 como una tabla virtual y no almacena datos, sino que utiliza asociaciones
 y los datos de las tablas originales, de forma que siempre se mantiene actulizada.
 Ayuda en la carga de datos,sobre todo en bbdd grandes y da ahorro de trabajo al no introducir tantas
 consultas grandes.
 */
CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categorias'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

-- Para ver la vista:
show tables;

-- Para usarla:
SELECT * FROM entradas_con_nombres;

-- Se pueden usar condiciones
SELECT * FROM entradas_con_nombres WHERE autor = 'Paco';

-- Borrar una vista
DROP VIEW entradas_con_nombres;