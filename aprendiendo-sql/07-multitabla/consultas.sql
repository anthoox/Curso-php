/*
 CONSULTA MULTITABLA
 Consultas que sirven para consultar varias tablas en una sola sentencia
 */

 #MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL USUARIO, NOMBRE DEL AUTOR Y NOMBRE DE LA CATEGORIA#
 SELECT e.id, e.titulo,  u.nombre AS 'Autor', c.nombre AS 'Categoria'
 FROM entradas e, usuarios u, categorias c
 WHERE e.usuario_id = u.id AND e.categoria_id = c.id;
/*
  Cada letra representa el nombre de la tabla puesto de forma opcional para que sea más leible
  sacabame todas las columnas indicadas de las tablas indicadas cuando el id de usuarios de entradas sea igual al id de usuarios y 
  cuando el idcategorias de entradas sea igual al id de categorias
 */

#Mostrar el nombre de las categorias y al lado cuantas entradas tienen#
/*
  Saca todaslas categorias mostrando su nombre y el numero total de elementos que tiene siempre y cuando la categoria_id de entradas sea igual a el id de categorias y lo agrupa
  por id de categoria
*/
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

#Mostrar el email de los usuarios y al lado cuantas entradas tienen#
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;
/*Este tipo de consultas recorren todo el contenido de las tablas y luego muestran el resultado. Esto puede resultar muy pesado en la consulta*/

#INNER JOIN#
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categorias'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;