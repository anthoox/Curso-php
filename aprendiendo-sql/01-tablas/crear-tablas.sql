/*
* Crear Tabla
 Tipos de datos:
 int (nº cifras) ENTERO (máximo 255)
 integer (nº cifras) ENTERO (máximo 4294967295)
 varchar (nº caracteres) STRING / ALFANUMÉRICO (máximo 255)
 char (nº caracteres) STRING / ALFANUMÉRICO
 float (nº cifras, nº de decimales) DECIMAL / COMA FLOTANTE
 date, time, timestamp ()

 String más grandes:
 TEXT 65535 caracteres
 MEDIUMTEXT 16 millones de caracteres
 LONGTEXT 4 billones de caracteres

 Enteros más grandes
 MEDIUMINT
 BIGINT

*/

--not null: obliga a introducir un dato. Indicar que es null es todo lo contrario
--default introduce un dato por defecto
CREATE TABLE usuarios(
    id          int(11) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255) null,
    texto       varchar(255) default 'hola que tal',
    email       varchar(100) not null,
    clave       varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

-- Borrar tabla drop table nombre_tabla
