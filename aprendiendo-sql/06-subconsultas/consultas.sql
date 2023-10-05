/*
Son consultas que se ejecutan dentro de otras.
Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
Esto es posible gracias a las claves ajenas/foraneas
*/
-- cuando id exista en la tabla entradas
-- Saca todos los usuarios cuyo id exista en la tabla entradas
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

-- Los usuarios que no existen dentro de la tabla entradas
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

-- Sacar el nombre y apellidos los usuarios que tengan alguna entrada que en su titulo hable de GTA
SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

-- sacar todas las entradas de la categoria accion utilizando su nombre
SELECT categoria_id, titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre='Accion');

-- mostrar las categorias con más de 3 o más entradas
SELECT nombre FROM categorias WHERE id IN
    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id>=3));

-- Mostrar los usuarios que crearon una entrada un martes
SELECT * FROM usuarios WHERE id IN
    (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

-- Mostrar el nombre del usuario que tenga más entradas
SELECT CONCAT(nombre, ' ',apellidos) AS 'El que más tiene' FROM usuarios WHERE id = 
    (SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

-- Mostrar las categorias sin entradas
SELECT nombre FROM categorias WHERE id NOT IN (
    SELECT categoria_id FROM entradas);