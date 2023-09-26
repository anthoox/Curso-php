#MOSTRAR TODOS LOS REGISTROS/FILAS DE UNA TABLA#
SELECT email, nombre, apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#
SELECT * FROM usuarios;

#OPERADORES ARITMETICOS#
SELECT email, (4+7) AS 'Operación' FROM usuarios;

#FUNCIONES MATEMÁTICAS#

SELECT RAND() AS 'OPERACION' FROM usuarios;
-- si se le da parametros, el segundo indicaría el número de decimales

SELECT TRUNCATE(7.91, 1) AS 'OPERACION' FROM usuarios;
-- siempre añadirle el segundo parametro. Trunca el número de decimales a mostrar

SELECT SQRT(7.91) AS 'OPERACION' FROM usuarios;
-- Raiz cuadrada

#FUNCIONES PARA CARACTERES#
SELECT UPPER(nombre) FROM usuarios;
-- mayúsculas

SELECT LOWER(nombre) FROM usuarios;
-- minúsculas

SELECT CONCAT(nombre, ' ', apellidos ) AS 'NOMBRE COMPLETO' FROM usuarios;
-- concatenar resultados

SELECT UPPER(CONCAT(nombre, ' ', apellidos )) AS 'NOMBRE COMPLETO' FROM usuarios;
-- uniendo funciones

SELECT LENGTH(CONCAT(nombre, ' ', apellidos )) AS 'CARACTERES' FROM usuarios;
-- longitud de caracteres

SELECT CONCAT('      ',nombre, ' ', apellidos, '   ' ) AS 'CARACTERES' FROM usuarios;
-- añadir espacios en blanco

SELECT TRIM(CONCAT('      ',nombre, ' ', apellidos, '   ' )) AS 'CARACTERES' FROM usuarios;
-- borrar espacios en blanco

#FUNCIONES CON FECHAS#
SELECT email, fecha FROM usuarios;

SELECT email, fecha, CURDATE() AS 'FECHA ACTUAL' FROM usuarios;
-- mostrar fecha actual

SELECT email, DATEDIFF(fecha, CURDATE()) AS 'DÍAS DE DIFERENCIA' FROM usuarios;
-- diferencia en dias entre las fechas

SELECT email, DAYNAME(fecha), DAYNAME(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el día de la fecha pasada

SELECT email, DAYOFMONTH(fecha) AS 'DIA', DAYOFMONTH(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el día del mes de esa fecha

SELECT email, DAYOFWEEK(fecha) AS 'DIA', DAYOFWEEK(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el día de la semasna

SELECT email, DAYOFYEAR(fecha) AS 'DIA', DAYOFYEAR(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el día del año

SELECT email, MONTH(fecha) AS 'DIA', MONTH(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el mes

SELECT email, YEAR(fecha) AS 'DIA', YEAR(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el año

SELECT email, DAY(fecha) AS 'DIA', DAY(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica el día

SELECT email, HOUR(fecha) AS 'DIA', HOUR(CURDATE()) AS 'DÍAS' FROM usuarios;
-- indica la hora, si la tiene

SELECT email, CURTIME() AS 'Fecha' FROM usuarios;
-- Indica la hora actual

SELECT email, SYSDATE() AS 'Fecha' FROM usuarios;
-- indica la hora del sistema del servidor

SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;
-- cambiar el formato de la fecha, es igual que en PHP pero hay que añadirle '%'

SELECT * FROM usuarios;

SELECT email, ISNULL(apellidos) FROM usuarios;
-- comprobar si algun campo es nulo

SELECT email, STRCMP('HOLA', 'HOLA') FROM usuarios;
-- comprobar si dos campos son iguales. Si son iguales devuelve false, si son diferentes true

SELECT VERSION() FROM usuarios;
-- devuelve la version del servidor, si no se hace así no funciona

SELECT USER() FROM usuarios;
-- devuelve el usuario del servidor

SELECT DISTINCT USER() FROM usuarios;
-- Si los valores son iguales, devuelve solo uno

SELECT DISTINCT DATABASE() FROM usuarios;
-- Muestra la base de datos

SELECT email, IFNULL(apellidos, 'Este campo esta vacio') FROM usuarios;
-- muestra ese mensaje cuando es nulo